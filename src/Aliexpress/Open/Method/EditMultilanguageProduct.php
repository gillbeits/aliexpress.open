<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 23.09.15
 * Time: 18:31
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class EditMultilanguageProduct extends Method {

    const ru = "ru_RU";
    const pt = "pt_BR";
    const fr = "fr_FR";
    const es = "es_ES";
    const in = "in_ID";
    const it = "it_IT";
    const de = "de_DE";
    const nl = "nl_NL";
    const tr = "tr_TR";
    const iw = "iw_IL";
    const ja = "ja_JP";
    const ar = "ar_MA";
    const th = "th_TH";
    const vi = "vi_VN";
    const ko = "ko_KR";

    protected $method = Api::METHOD_POST;
    protected $methodPath = '/1/aliexpress.open/api.editMultilanguageProduct';

    /**
     * @var int
     * @NotBlank()
     */
    private $productId;

    /**
     * @var string
     * @NotBlank()
     */
    private $locale;

    /**
     * @var string
     * @Length(max=218)
     */
    private $subject;

    /**
     * @var string
     */
    private $detail;
}
