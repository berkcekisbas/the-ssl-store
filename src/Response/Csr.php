<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 5:31 PM
 */

namespace TheSslStore\Response;

use TheSslStore\Core\BaseResponse;

class Csr extends BaseResponse
{
    public $DomainName;
    public $DNSNames;
    public $Country;
    public $Email;
    public $Locality;
    public $Organization;
    public $OrganizationUnit;
    public $State;
    public $hasBadExtensions = false;
    public $isValidDomainName = false;
    public $isWildcardCSR = false;
    public $MD5Hash;
    public $SHA1Hash;
    public $sha256;
    public $RegionSpecificOrderIndicator;
}
