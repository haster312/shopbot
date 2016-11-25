<?php

use AppBundle\Business\CategoryBusiness;

$categories = $this->get('category.business')->getAllCategory();
var_dump($categories);exit;
