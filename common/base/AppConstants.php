<?php
/**
 * Created by PhpStorm.
 * User: User
 * Author: Joshua Saputra
 * Date: 1/12/2017
 * Time: 9:32 AM
 */
namespace common\base;

class AppConstants
{
    // USER ROLES
    const USER_ROLE_ADMINISTRATOR = 10;
    const USER_ROLE_SUPERVISOR = 20;
    const USER_ROLE_OPERATOR = 30;

    // SESSIONS
    const SES_WEB_PROFILE = 'S_WEB_PROFILE';
    const SES_WORKING_PLAN_DETAIL = 'S_WORKING_PLAN';

    // APP CONFIG
    const DELIMITER = '#|#';
    const CONCAT = '|!|';
    const LIMIT_PER_PAGE = 20;
    const INVOICE_FORMAT = '{module}/{date}/{number}';
    const APP_BACKEND_BASE_URL = '/promoe/adminpanel'; // localhost
    //    const APP_BACKEND_BASE_URL = '/adminpanel';
    const APP_FRONTEND_BASE_URL = '/promoe'; // localhost
    //    const APP_FRONTEND_BASE_URL = '/';
    const IMG_RESPONSIVE = 'img-responsive';
}