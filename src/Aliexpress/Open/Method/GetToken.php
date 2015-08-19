<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 17.08.15
 * Time: 9:20
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;

class GetToken extends Method
{
    protected $scheme = Api::HTTPS_SCHEME;
    protected $method = Api::METHOD_POST;
    protected $methodPath = '/1/system.oauth2/getToken';

    /**
     * @var string
     * @NotBlank
     */
    private $grant_type = 'authorization_code';
    /**
     * @var int
     * @NotBlank
     */
    private $client_id;
    /**
     * @var string
     * @NotBlank
     */
    private $client_secret;
    /**
     * @var string
     */
    private $refresh_token;
    /**
     * @var bool
     */
    private $need_refresh_token = "true";
    /**
     * @var string
     */
    private $redirect_uri = "urn:ietf:wg:oauth:2.0:oob";
    /**
     * @var string
     */
    private $code;
}