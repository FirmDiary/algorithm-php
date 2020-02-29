<?php
/**
 * @author: Azal.
 * @date: 2020/2/19
 * @time: 21:23
 */

namespace _Stack;


/**
 * 基于数组实现的是顺序栈
 * Class StackOnArray
 * @package _Stack
 */
class StackOnArray
{

    private $stack;

    private $head;

    private $n;

    public function __construct($capacity = 10)
    {
        $this->stack = [];

        $this->head = 0;
        $this->n = $capacity;
    }

    /**
     * 入栈
     * @return bool
     */
    public function push($value)
    {
        if ($value == null) {
            return false;
        }
        if ($this->head == $this->n) {
            //扩容
            $newStack = [];
            foreach ($this->stack as $item) {
                $newStack[] = $item;
            }
            $this->n *= 2;
        }
        $this->stack[$this->head++] = $value;
        return true;
    }

    /**
     * 出栈
     * @return bool
     */
    public function pop()
    {
        if ($this->head > 0) {
            $this->stack[--$this->head];
            return true;
        }
        return false;
    }


    public function show()
    {
        if ($this->head == 0) {
            return null; //空
        }
        $str = '';
        for ($i = $this->head; $i > 0; $i--) {
            $str .= $this->stack[$i - 1];
            if ($i > 1) {
                $str .= ',';
            }
        }
        return $str;
    }

}
