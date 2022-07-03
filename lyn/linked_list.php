<?php

class Node
{
    public $data;
    public $next;


    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }


    public function getData()
    {
        return $this->data;
    }


    public function setData($data): void
    {
        $this->data = $data;
    }

    public function getNext()
    {
        return $this->next;
    }

//    public function __toString()
//    {
//
//    }

    public function setNext($next)
    {
        $this->next = $next;
    }
}

class LinkedList
{
    public $head;
    public $data;
    public int $count;

    /**
     * @param $head
     */
    public function __construct($head = null)
    {
        $this->head = $head;
        $this->count = 0;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    public function insert($data)
    {
        $newNode = new Node($data);
//        var_dump($newNode);
        $newNode->setNext($this->head);
        $this->head = $newNode;
        $this->count += 1;
    }

    public function find($data)
    {
        $item = $this->head;

        while ($item != null) {
            if ($item->getData() == $data) {
                return $item->getData();
            } else {
                $item = $item->getNext();
            }
        }

        return 'None';
    }

    public function delete($index)
    {
        if ($index > $this->count - 1) {
            return;
        }

        if ($index == 0) {
            $this->head = $this->head->getNext();
        } else {
            $tempIndex = 0;
            $node = $this->head;
            while ($tempIndex < $index - 1) {
                $node = $node->getNext();
                $tempIndex += 1;
            }
            $node->setNext($node->getNext()->getNext());
            $this->count -= 1;
        }
    }

    public function display()
    {
        $tempNode = $this->head;

        while ($tempNode != null) {
            print("Node: " . $tempNode->getData()) . "\n";
            $tempNode = $tempNode->getNext();
        }
    }
}

$itemList = new LinkedList();
$itemList->insert(38);
$itemList->insert(49);
$itemList->insert(13);
$itemList->insert(15);
$itemList->display();

//print("item count: " . $itemList->getCount()) . "\n";
//print("Finding item: " . $itemList->find(13)) . "\n";
//print("Finding item: " . $itemList->find(78)) . "\n";

$itemList->delete(1);
print("item count: " . $itemList->getCount()) . "\n";
print("Finding item: " . $itemList->find(38)) . "\n";
$itemList->display();