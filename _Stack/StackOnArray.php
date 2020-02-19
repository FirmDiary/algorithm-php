<?php
/**
 * @author: Azal.
 * @date: 2020/2/19
 * @time: 21:23
 */

namespace _Stack;


use _Array\ArrayStructure;
use _LinkedList\LinkedNodeStructure;

/**
 * 基于数组实现的式顺序栈
 * Class StackOnArray
 * @package _Stack
 */
class StackOnArray
{

    protected $stack;

    protected $length;

    public function __construct($length = 10)
    {
        $this->stack = new ArrayStructure($length);

        $this->length = $length;
    }

    /**
     * 入栈
     * @param LinkedNodeStructure $node
     * @return bool
     */
    public function push($value)
    {
        if ($value == null) {
            return false;
        }
        $this->stack->insert($this->stack->length, $value);
        return true;
    }

    /**
     * 出栈
     * @return bool
     */
    public function pop()
    {
        if ($this->stack->length > 0) {
            $this->stack->delete($this->stack->length-1);
            return true;
        }
        return false;
    }


    public function show()
    {
        return $this->stack->show();
    }

}
