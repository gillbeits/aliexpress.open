<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 19.08.15
 * Time: 10:49
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Url;

class UploadImage extends Method
{
    protected $method = Api::METHOD_POST;
    protected $methodPath = "/1/aliexpress.open/api.uploadImage";

    /** @var  string */
    private $fileName;
    /** @var  int */
    private $groupId;
    /**
     * @var resource
     * @NotBlank
     * @Url
     */
    protected $file;

    /**
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function execute()
    {
        $this->fileName = basename($this->file);
        $properties = $this->getProperties();
        $client = $this->getClient();

        $response = $client->post($this->sign->getFullPath(), [
            'query' => $properties,
            'body' => fopen($this->file, 'r')
        ]);

        return (object)json_decode($response->getBody()->getContents(), true);
    }
}