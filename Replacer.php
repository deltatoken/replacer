<?php

use \gymad\rditerator\RecursiveDirectoryIteration;

/**
 * Description of Replacer
 *
 * @author gyula
 */
class Replacer {
    
    /**
     *
     * @var ReplacerConfig
     */
    protected $config;

    /**
     * 
     * @param ReplacerConfig $config
     */
    public function __construct(ReplacerConfig $config) {
        $this->config = $config;
    }
    
    /**
     * 
     * @param boolean $verbose
     * @return ReplacerResults
     * @throws RuntimeException
     */
    public function replace($verbose = true) {
        
        $results = new ReplacerResults();
        
        if ($verbose) {
            echo "Reading files...\n";
        }
        $dirIterator = new RecursiveDirectoryIteration();
        $files = $dirIterator->readFiles($this->config->getPath(), true, $this->config->getExcludedPaths(), $this->config->getExcludedPaths());
        
        foreach ($files as $file) {
            
            if (in_array($file['filename'], $this->config->getExcludedFiles())) {
                continue;
            }
            
            if (in_array($file['relativePath'], $this->config->getExcludedPaths())) {
                continue;
            }
            
            
            if ($exludedRegexes = $this->config->getExcludedRegexes()) {
                $exclude = false;
                foreach ($exludedRegexes as $exludedRegex) {
                    if (
                        preg_match($exludedRegex, $file['relativePath']) || 
                        preg_match($exludedRegex, $file['realPath']) || 
                        preg_match($exludedRegex, $file['filename']) ) {
                        $exclude = true;
                        break;
                    }
                  
                }
                if ($exclude) {
                    continue;
                }
            }
            
            if (in_array($file['extension'], $this->config->getExcludedExtensions())) {
                continue;
            }
            
            $includedExtensions = $this->config->getIncludedExtensions();
            if (!empty($includedExtensions) && !in_array($file['extension'], $includedExtensions)) {
                continue;
            }
            
            if ($verbose) {
                echo "Replacing in file: {$file['relativePath']} ... ";
            }
            $cnt = file_get_contents($file['realPath']);
            if (false === $cnt) {
                throw new RuntimeException("File read error: {$file['realPath']}");
            }
            
            foreach ($this->config->getRegexes() as $regex => $new) {
                $cnt = preg_replace($regex, $new, $cnt);
                if (null === $cnt) {
                    throw new RuntimeException("Replacer failed by regex: '$regex' => '$new'");
                }
            }
            
            if (false === file_put_contents($file['realPath'], $cnt)) {
                throw new RuntimeException("File write error: {$file['realPath']}");
            }
            
            if ($verbose) {
                echo "OK\n";
            }
            
            $results->counter++;
        }
        
        return $results;
    }
    
    /**
     * 
     * @param ReplacerResults $results
     */
    public function showResults(ReplacerResults $results) {
        echo "{$results->counter} replacement done.\n";
    }
    
}
