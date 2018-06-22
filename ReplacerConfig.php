<?php

/**
 *
 * @author gyula
 */

class ReplacerConfig {
    
    private $regexes;
    
    private $path;
    
    private $excludedPaths;
    
    private $excludedFiles;
    
    private $excludedRegexes;
    
    private $excludedExtensions;
    
    private $includedExtensions;
    
    public function __construct($regexes, $path, $excludedExtensions = [], $excludedPaths = [], $excludedFiles = [], $excludedRegexes = [], $includedExtensions = []) {
        $this->regexes = $regexes;
        $this->path = $path;
        $this->excludedPaths = $excludedPaths;
        $this->excludedFiles = $excludedFiles;
        $this->excludedRegexes = $excludedRegexes;
        $this->excludedExtensions = $excludedExtensions;
        $this->includedExtensions = $includedExtensions;
    }
    
    public function getRegexes() {
        return $this->regexes;
    }
    
    public function getPath() {
        return $this->path;
    }
    
    public function getExcludedPaths() {
        return $this->excludedPaths;
    }
    
    public function getExcludedRegexes() {
        return $this->excludedRegexes;
    }
    
    public function getExcludedFiles() {
        return $this->excludedFiles;
    }
    
    public function getExcludedExtensions() {
        return $this->excludedExtensions;
    }
    
    public function getIncludedExtensions() {
       return $this->includedExtensions;
    }
    
}
