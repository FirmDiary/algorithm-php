<?php
/**
 * @author: Azal.
 * @date: 2020/2/15
 * @time: 19:19
 */


namespace _Array;
/**
 * 数组
 * Class ArrayStructure
 */
class ArrayStructure
{

    public $data;

    public $capacity;

    public $length = 0;


    /**
     * ArrayStructure constructor.
     * @param $capacity
     * @throws Exception
     */
    public function __construct($capacity)
    {
        $capacity = (int)$capacity;

        if (!$capacity) {
            throw new Exception('请传入正确的数组容量');
        }

        $this->data = array();
        $this->capacity = $capacity;
    }


    /**
     * 数组的随机访问特征,获取指定下标的值  O(1)
     * @param $index
     * @return mixed|null
     * @throws Exception
     */
    public function find($index)
    {
        $this->checkIndex($index);

        if ($index < $this->length) {
            return $this->data[$index];
        }
        return null;
    }

    /**
     * 在索引index位置插入值value
     * @param $index
     * @param $value
     * @throws Exception
     */
    public function insert($index, $value)
    {
        $this->checkIndex($index);

        if ($this->length >= $this->capacity) {
            throw new Exception('超出容量');
        }

        $tail = $this->length - 1;

        while ($tail >= $index) {
            $this->data[$tail + 1] = $this->data[$tail];
            $tail--;
        }

        $this->data[$index] = $value;
        $this->length++;
    }


    /**
     * 根据索引index删除
     * @param $index
     * @throws Exception
     */
    public function delete($index)
    {
        $this->checkIndex($index);

        if ($index >= $this->length) {
            throw new Exception('无此索引');
        }

        if ($index + 1 != $this->length) {
            while ($this->length > $index) {
                $this->data[$index] = $this->data[$index + 1];
                $index++;
            }
        }

        $this->length--;
    }

    public function show()
    {
        $str = '';
        for ($i = 0; $i < $this->length; $i++) {
            $str .= $this->data[$i];
            if ($i + 1 !== $this->length) {
                $str .= ',';
            }
        }
        return $str;
    }


    /**
     * 检查index索引
     * @param $index
     * @throws Exception
     */
    protected function checkIndex($index)
    {
        if ($index < 0) {
            throw new Exception('请传入正确的数组下标');
        }
        if ($index >= $this->capacity) {
            throw new Exception('超出容量');
        }
        if ($index > $this->length) {
            throw new Exception('索引越界');
        }
    }

}



