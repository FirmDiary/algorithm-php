<?php
/**
 * @author: Azal.
 * @date: 2020/2/15
 * @time: 21:30
 */

namespace _LinkedList;

/**
 * 链表
 * Class LinkedListStructure
 */
class LinkedNode
{
    //后继指针
    public $next;

    //值
    public $value;

    public function __construct($value = null)
    {
        $this->value = $value;
        $this->next = null;
    }

}
