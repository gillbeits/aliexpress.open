<?php
/**
 * Created by PhpStorm.
 * User: dbushmin
 * Date: 09.10.15
 * Time: 12:13
 */

namespace Aliexpress\Open\Method;


use Aliexpress\Open\Api;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Url;

class SellerShipment extends Method {

    const ACOMMERCE = "ACOMMERCE";
    const ARAMEX = "ARAMEX";
    const AUSPOST = "AUSPOST";
    const CHP = "CHP";
    const CORREOS = "CORREOS";
    const CPAM = "CPAM";
    const CPAM_HRB = "CPAM_HRB";
    const CPAP = "CPAP";
    const CTR_LAND_PICKUP = "CTR_LAND_PICKUP";
    const DEUTSCHE_POST = "DEUTSCHE_POST";
    const DHL = "DHL";
    const DHL_DE = "DHL_DE";
    const DHL_ES = "DHL_ES";
    const DHL_FR = "DHL_FR";
    const DHL_IT = "DHL_IT";
    const DHL_UK = "DHL_UK";
    const E_EMS = "E_EMS";
    const ECONOMIC139 = "ECONOMIC139";
    const EMS = "EMS";
    const EMS_SH_ZX_US = "EMS_SH_ZX_US";
    const EMS_ZX_ZX_US = "EMS_ZX_ZX_US";
    const ENVIALIA = "ENVIALIA";
    const FEDEX = "FEDEX";
    const FEDEX_IE = "FEDEX_IE";
    const HKPAM = "HKPAM";
    const HKPAP = "HKPAP";
    const ITELLA = "ITELLA";
    const ITELLA_PY = "ITELLA_PY";
    const JNE = "JNE";
    const LAPOSTE = "LAPOSTE";
    const Other = "Other";
    const OTHER_AU = "OTHER_AU";
    const OTHER_DE = "OTHER_DE";
    const OTHER_ES = "OTHER_ES";
    const OTHER_FR = "OTHER_FR";
    const OTHER_IT = "OTHER_IT";
    const OTHER_RU = "OTHER_RU";
    const OTHER_UK = "OTHER_UK";
    const OTHER_US = "OTHER_US";
    const POSTEITALIANE = "POSTEITALIANE";
    const ROYAL_MAIL = "ROYAL_MAIL";
    const RUSSIAN_POST = "RUSSIAN_POST";
    const SEP = "SEP";
    const SF = "SF";
    const SGP = "SGP";
    const SINOTRANS_PY = "SINOTRANS_PY";
    const SPSR = "SPSR";
    const SPSR_CN = "SPSR_CN";
    const SPSR_RU = "SPSR_RU";
    const TNT = "TNT";
    const TOLL = "TOLL";
    const UPS = "UPS";
    const UPS_US = "UPS_US";
    const UPSE = "UPSE";
    const USPS = "USPS";
    const YANWEN_AM = "YANWEN_AM";
    const YANWEN_JYT = "YANWEN_JYT";
    const ZTORU = "ZTORU";

    const TypeALL = "all";
    const TypePART = "part";

    protected $method = Api::METHOD_POST;
    protected $methodPath = '/1/aliexpress.open/api.sellerShipment';

    /**
     * @var string
     * @NotBlank()
     */
    private $serviceName;

    /**
     * @var string
     * @NotBlank()
     */
    private $logisticsNo;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     * @NotBlank()
     */
    private $sendType;

    /**
     * @var string
     * @NotBlank()
     */
    private $outRef;

    /**
     * @var string
     * @Url()
     */
    private $trackingWebsite;

}