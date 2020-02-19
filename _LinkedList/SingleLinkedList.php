<?php
/**
 * @author: Azal.
 * @date: 2020/2/15
 * @time: 21:30
 */

namespace _LinkedList;

/**
 * 单链表
 * Class LinkedListStructure
 */
class SingleLinkedList
{
    //头结点
    public $head;

    public function __construct()
    {
        $this->head = new LinkedNodeStructure();
    }

    public function append($value)
    {
        $newNode = new LinkedNodeStructure($value);
        $currentNode = $this->head;
        while ($currentNode->next) {
            $currentNode = $currentNode->next;
        }
        $currentNode->next = $newNode;
    }

    public function show()
    {
        $str = '';
        $currentNode = $this->head;
        while ($currentNode) {
            $str .= $currentNode->value. '->';
            $currentNode = $currentNode->next;
        }
        return $str;
    }


    public function deleteLastOne()
    {
        $length = $this->getLength();
        $currentNode = $this->head;
        $i = 1;
        while ($i<$length) {
            $currentNode = $currentNode->next;
            $i++;
        }
        $currentNode->next = null;
    }


    //删除结点中 值等于某个给定值 的结点
    public function deleteByValue($value)
    {
        $currentNode = $this->head;
        while ($currentNode && $currentNode->next) {
            if ($currentNode->next->value == $value) {
                $currentNode->next = $currentNode->next->next;
                break;
            }
            $currentNode = $currentNode->next;
        }
    }


    public function getLength()
    {
        $length = 0;
        $currentNode = $this->head->next;
        while ($currentNode) {
            $length++;
            $currentNode = $currentNode->next;
        }
        return $length;
    }

}


