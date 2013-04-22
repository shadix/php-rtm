<?php
/**
 * MIT License
 * ===========
 *
 * Copyright (c) 2013 Bartosz Maciaszek <bartosz.maciaszek@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @package    RtmTest.Mocks
 * @author     Bartosz Maciaszek <bartosz.maciaszek@gmail.com>
 * @copyright  2013 Bartosz Maciaszek.
 * @license    http://www.opensource.org/licenses/mit-license.php  MIT License
 */

namespace RtmTest\Mocks;

use Rtm\Rtm;
use Rtm\Exception;
use Rtm\ClientInterface;

class ServiceTestClientMock implements ClientInterface
{
	/**
	 * Rtm object
	 * @var Rtm
	 */
	private $rtm;

    /**
     * Set Rtm object
     * @param Rtm $rtm
     */
    public function setRtm(Rtm $rtm)
    {
    	$this->rtm = $rtm;
    }

    /**
     * Get Rtm object
     * @return Rtm
     */
    public function getRtm()
    {
    	return $this->rtm;
    }

    /**
     * Makes a request to RTM API
     * @param  string $method
     * @param  array  $params
     * @return DataContainer
     * @throws Rtm\Exception If response is not valid
     */
    public function call($method, array $params = array())
    {
        $array = array_reverse(explode('.', $method));

    	$response = new ServiceTestResponseMock;
    	$response->__setService('Rtm\\Service\\' . ucfirst($array[1]));
    	$response->__setMethod($method);
    	$response->__setParams($params);
    	return $response;
    }
}
