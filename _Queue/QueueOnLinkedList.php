<?php
/**
 * @author: Azal.
 * @date: 2020/2/29
 * @time: 13:19
 */

namespace _Queue;


use _LinkedList\LinkedNodeStructure;

class QueueOnLinkedList
{
    private $head;

    private $n;

    public function __construct()
    {
        $this->head = new LinkedNodeStructure();
        $this->n = 0;
    }

    public function enqueue($value)
    {
        $node = new LinkedNodeStructure($value);
        $currentNode = $this->head;
        while ($currentNode != null && $currentNode->next != null) {
            $currentNode = $currentNode->next;
        }
        $currentNode->next = $node;
        $this->n++;
    }


    public function dequeue()
    {
        if ($this->n == 0) {
            return null;
        }
        $result = $this->head->next->value;
        $this->head->next = $this->head->next->next;
        $this->n--;
        return $result;
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
