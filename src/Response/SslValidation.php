<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 5:32 PM
 */

namespace hasnhasan\TheSslStore\Response;

use hasnhasan\TheSslStore\Core\BaseResponse;

class SslValidation extends BaseResponse
{
    public $DomainName;
    public $CommonName;
    public $ChainRoot;
    public $Subject;
    public $Organization;
    public $OrganizationUnit;
    public $Country;
    public $State;
    public $Location;
    public $SerialNumber;
    public $PublicKey;
    public $KeySize;
    public $Issuer;
    public $IssuerName;
    public $KeyAlgorithmParameters;
    public $KeyAlgorithm;
    public $HashCode;
    public $Format;
    public $ExpirationDate;
    public $EffectiveDate;
    public $SANs;
    public $Version;
    public $ThumbPrint;
    public $SignatureAlgorithm;
    public $CertHash;
    public $CertificateType;
    public $Verify;
}
