<?php
/**
 * @author: Azal.
 * @date: 2020/2/19
 * @time: 21:23
 */

namespace _Stack;


use _LinkedList\LinkedNodeStructure;

/**
 * 基于链表实现的是链式栈
 * Class StackOnLinkedList
 * @package _Stack
 */
class StackOnLinkedList
{

    private $head;

    private $n;

    public function __construct()
    {
        $this->head = new LinkedNodeStructure();
        $this->n = 0;
    }

    public function pushValue($value)
    {
        $this->pushNode(new LinkedNodeStructure($value));
    }

    /**
     * 入栈
     * @param LinkedNodeStructure $node
     * @return bool
     */
    public function pushNode(LinkedNodeStructure $node)
    {
        if ($node == null) {
            return false;
        }
        $node->next = $this->head->next;
        $this->head->next = $node;
        $this->n++;
        return true;
    }

    /**
     * 出栈
     * @return bool
     */
    public function pop()
    {
        if ($this->n > 0) {
            $this->head->next = $this->head->next->next;
            $this->n--;
            return true;
        }
        return false;
    }


    public function show()
    {
        if ($this->n == 0) {
            return '';
        }
        $str = 'head->';
        $currentNode = $this->head;
        while ($currentNode) {
            $str .= $currentNode->next ? ($currentNode->next->value . '->') : 'null';
            $currentNode = $currentNode->next;
        }
        return $str;
    }


}
