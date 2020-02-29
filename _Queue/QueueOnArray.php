<?php
/**
 * @author: Azal.
 * @date: 2020/2/28
 * @time: 21:19
 */

namespace _Queue;


class QueueOnArray
{
    public $queue;

    public $n = 0;

    public $head = 0;

    public $tail = 0;

    public function __construct($capacity = 10)
    {
        $this->queue = [];

        $this->n = $capacity;
    }

    /**
     * 入队
     * @param $value
     * @return bool
     */
    public function enqueue($value)
    {
        if ($this->tail == $this->n) {
            //扩容
            $newQueue = [];
            foreach ($this->queue as $item) {
                $newQueue[] = $item;
            }
            $this->queue = $newQueue;
            $this->n *= 2;
        }

        $this->queue[$this->tail] = $value;
        $this->tail++;
        return true;
    }

    /**
     * 出队
     * 先进者先出
     * @return mixed|null
     */
    public function dequeue()
    {
        if ($this->head == $this->tail) {
            return null; //空队列
        }

        $result = $this->queue[$this->head++];
        return $result;
    }


    public function show()
    {
        if ($this->head == $this->tail) {
            return null; //空队列
        }
        $str = '';
        for ($i = $this->head; $i < $this->tail; $i++) {
            $str .= $this->queue[$i];
            if ($i + 1 !== $this->tail) {
                $str .= ',';
            }
        }
        return $str;
    }

}
