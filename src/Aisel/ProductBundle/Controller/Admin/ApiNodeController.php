<?php

/*
 * This file is part of the Aisel package.
 *
 * (c) Ivan Proskuryakov
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aisel\ProductBundle\Controller\Admin;

use Aisel\ResourceBundle\Controller\ApiNodeController as BaseApiNodeController;

/**
 * NodeController
 *
 * @author Ivan Proskoryakov <volgodark@gmail.com>
 */
class ApiNodeController extends BaseApiNodeController
{

    /**
     * @var string
     */
    protected $model = "Aisel\ProductBundle\Entity\Category";

}
