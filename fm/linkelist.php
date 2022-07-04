<?php

class Node
{
    public $data = null;
    public $next = null;

    public function __construct($data)
    {
        $this->data = $data;
    }
}

class LinkedList
{
    /**
     * @var mixed|null
     */
    private $firstNode = null;
    private int $totalNodes = 0;

    public function insert(string $data = null): bool
    {
        $newNode = new Node($data);

        if ($this->firstNode === null) {
            $this->firstNode = &$newNode;
        } else {
            $currentNode = $this->firstNode;
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->totalNodes++;
        return true;
    }

    public function display()
    {
        echo "Total book titles: ". $this->totalNodes. "\n";
        $currentNode = $this->firstNode;
        while($currentNode !== null) {
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }
    }

    public function insertAtFirst(string $data = null)
    {
        $newNode = new Node($data);
        if ($this->firstNode === null) {
            $this->firstNode = &$newNode;
        } else {
            $currentFirstNode = $this->firstNode;
            $this->firstNode = &$newNode;
            $newNode->next = $currentFirstNode;
        }

        $this->totalNodes++;
        return true;
    }

    public function search(string $data = null)
    {
        if ($this->totalNodes) {
            $currentNode = $this->firstNode;

            while ($currentNode !== null) {
                if ($currentNode->data === $data) {
                    return $currentNode;
                }
                $currentNode = $currentNode->next;
            }
        }

        return false;
    }

    public function insertBefore(string $data = null, string $query = null)
    {
        $newNode = new Node($data);

        if ($this->firstNode) {
            $previous = null;
            $currentNode = $this->firstNode;
            while ($currentNode !== null) {

                if ($currentNode->data === $query) {
                    $newNode->next = $currentNode;
                    $previous->next = $newNode;
                    $this->totalNodes++;
                    break;
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }

    public function insertAfter(string $data = null, string $query = null)
    {
        $newNode = new Node($data);

        if ($this->firstNode) {
            $nextNode = null;
            $currentNode = $this->firstNode;

            while($currentNode !== null ) {
                if ($currentNode->data === $query) {
                    if ($nextNode !== null) {
                        $newNode->next = $nextNode;
                    }
                    $currentNode->next = $newNode;
                    $this->totalNodes++;
                    break;
                }
                $currentNode = $currentNode->next;
                $nextNode = $currentNode->next;
            }
        }
    }

    public function deleteFirst(): bool
    {
        if ($this->firstNode !== null) {
            if ($this->firstNode->next !== null) {
                $this->firstNode = $this->firstNode->next;
            } else {
                $this->firstNode = null;
            }
            $this->totalNodes--;
            return true;
        }

        return false;
    }

    public function deleteLast(): bool
    {
        if ($this->firstNode !== null) {
            $currentNode = $this->firstNode;
            if ($currentNode->next === null) {
                $this->firstNode = null;
            } else {
                $previousNode = null;
                while ($currentNode->next !== null) {
                    $previousNode = $currentNode;
                    $currentNode = $currentNode->next;
                }
                $previousNode->next = null;
                $this->totalNodes--;
                return true;
            }
        }
        return false;
    }

    public function delete(string $query = null)
    {
        if ($this->firstNode) {
            $previous = null;
            $currentNode = $this->firstNode;
            while ($currentNode !== null) {
                if ($currentNode->data === $query) {
                    if ($currentNode->next === null) {
                        $previous->next = null;
                    } else {
                        $previous->next = $currentNode->next;
                    }
                    $this->totalNodes--;
                    break;
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }

    public function getNthNode(int $n = 0)
    {
        $count = 1;
        if ($this->firstNode !== null) {
            $currentNode = $this->firstNode;
            while ($currentNode !== null) {
                if ($count === $n) {
                    return $currentNode;
                }
                $count++;
                $currentNode = $currentNode->next;
            }
        }
    }
}

$book = new LinkedList();
$book->insert("life at it's best");
$book->insert("life at it's worst");
$book->insert("enjoyment of life");
$book->insert("Hello");
$book->display();