<?php

namespace DoctrineExtensions\Tests\Entities;

/**
 * @Entity
 */
class Date
{
    /** @Id @Column(type="string") @GeneratedValue */
    public $id;

    /**
     * @Column(type="datetime")
     */
    public $created;
}
