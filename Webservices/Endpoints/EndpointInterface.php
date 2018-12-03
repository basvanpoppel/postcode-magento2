<?php
/**
 *
 *          ..::..
 *     ..::::::::::::..
 *   ::'''''':''::'''''::
 *   ::..  ..:  :  ....::
 *   ::::  :::  :  :   ::
 *   ::::  :::  :  ''' ::
 *   ::::..:::..::.....::
 *     ''::::::::::::''
 *          ''::''
 *
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Creative Commons License.
 * It is available through the world-wide-web at this URL:
 * http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to servicedesk@tig.nl so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please contact servicedesk@tig.nl for more information.
 *
 * @copyright   Copyright (c) Total Internet Group B.V. https://tig.nl/copyright
 * @license     http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 */
namespace TIG\Postcode\Webservices\Endpoints;

interface EndpointInterface
{
    /**
     * @return mixed
     */
    public function call();

    /**
     * @return string
     */
    public function getEndpoint();

    /**
     * @return array
     */
    public function getRequestData();

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function setRequestData(array $data);

    /**
     * @return string
     */
    public function getMethod();

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @return array
     */
    public function getRequestKeys();

    /**
     * @return array
     */
    public function getResponseKeys();
}
