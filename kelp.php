<?php

namespace kelp;

class Symbol {
	private $val;
	public function __construct($val) {
		$this->val = $val;
	}
	
	public function is($val) {
		return $this->val == $val;
	}
}

function symbol($key, $val = null) {
	static $symbols;
	$symbols || $symbols = array();
	
	if(!is_null($val)) {
		$symbols[$key] = new Symbol($val);
	}
	return $symbols[$key];
}

function global_env() {
    return array(
    #boolean operations
        'if' => false,
        'and' => false,
        'or' => false,
        'cond' => false,
    #symbols
        'intern' => false,
        'function' => false,
    #strings
        'pos' => false,
        'tlstr' => false,
        'cn' => false,
        'str' => false,
        'string?' => false,
    #assignments
        'set' => false,
        'value' => false, 
    #error handling
        'simple-error' => false,
        'trap-error' => false,
        'error-to-string' => false,
    #lists
        'cons' => false,
        'hd' => false,
        'tl' => false,
        'cons?' => false, 
    #generic functions
        'defun' => false,
        'lambda' => false,
        'let' => false, 
        '=' => false,
        'eval-without-reader-macros' => false,
        'freeze' => false,
        'type' => false,
    #vectors
        'absvector' => false,
        'address->' => false,
        '<-address' => false,
        'absvector?' => false, 
    #streams and i/o
        'pr' => false, 
        'read-byte' => false,
        'open' => false,
        'close' => false,
    #time
        'get-time' => false,
    #arithmetic
        '+' => false,
        '-' => false,
        '*' => false,
        '/' => false,
        '>' => false,
        '<' => false,
        '>=' => false,
        '<=' => false,
        'number?' => false
    );
}
