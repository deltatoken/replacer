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
    
    private $excludedExtensions;
    
    public function __construct($regexes, $path, $excludedExtensions = [], $excludedPaths = [], $excludedFiles = []) {
        $this->regexes = $regexes;
        $this->path = $path;
        $this->excludedPaths = $excludedPaths;
        $this->excludedFiles = $excludedFiles;
        $this->excludedExtensions = $excludedExtensions;
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
    
    public function getExcludedFiles() {
        return $this->excludedFiles;
    }
    
    public function getExcludedExtensions() {
        return $this->excludedExtensions;
    }
    
}
