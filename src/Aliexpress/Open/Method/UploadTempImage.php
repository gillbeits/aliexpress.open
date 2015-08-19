<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 19.08.15
 * Time: 11:49
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class UploadTempImage extends Method
{
    protected $method = Api::METHOD_POST;
    protected $methodPath = "/1/aliexpress.open/api.uploadTempImage";
    protected $api = Api::API_FILEAPI;

    /** @var  string */
    private $srcFileName;

    /** @var  string */
    protected $file;

    /**
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function execute()
    {
        $data = fopen($this->file, 'r');
        $this->srcFileName = basename($this->file);
        $properties = $this->getProperties();
        $client = $this->getClient();

        $response = $client->post($this->sign->getFullPath(), [
            'query' => $properties,
            'body' => $data
        ]);

        return (object)json_decode($response->getBody()->getContents(), true);
    }
}