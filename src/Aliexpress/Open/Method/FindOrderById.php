<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 09.10.15
 * Time: 16:44
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Aliexpress\Open\Model\aeopAeOrder;
use Symfony\Component\Validator\Constraints\NotBlank;

class FindOrderById extends Method {
    protected $method = Api::METHOD_POST;
    protected $methodPath = '/1/aliexpress.open/api.findOrderById';

    /**
     * @var int
     * @NotBlank()
     */
    private $orderId;

    /**
     * @var string
     */
    private $fieldList;

    /**
     * @var int
     */
    private $extInfoBitFlag;


    /**
     * @return aeopAeOrder
     */
    public function execute()
    {
        $data = parent::execute();
        $order = new aeopAeOrder($data);
        return $order;
    }
}