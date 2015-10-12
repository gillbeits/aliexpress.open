<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 30.09.15
 * Time: 15:40
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class FindOrderListSimpleQuery extends Method {
    protected $method = Api::METHOD_POST;
    protected $methodPath = '/1/aliexpress.open/api.findOrderListSimpleQuery';

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