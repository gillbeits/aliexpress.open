<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 23.10.15
 * Time: 13:05
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class FindOrderListQuery extends Method {
    protected $method = Api::METHOD_POST;
    protected $methodPath = '/1/aliexpress.open/api.findOrderListQuery';

    /**
     * @var int
     * @NotBlank()
     */
    private $page;

    /**
     * @var int
     * @NotBlank()
     */
    private $pageSize;

    /**
     * @var string
     */
    private $createDateStart;

    /**
     * @var string
     */
    private $createDateEnd;

    /**
     * @var string
     */
    private $orderStatus;
}