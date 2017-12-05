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

    // APP CONFIG
    const DELIMITER = '#|#';
    const CONCAT = '|!|';
    const LIMIT_PER_PAGE = 20;
    const INVOICE_FORMAT = '{module}/{date}/{number}';
    const APP_BACKEND_BASE_URL = '/promoe/adminpanel'; // localhost
    //    const APP_BACKEND_BASE_URL = '/adminpanel';
    const APP_FRONTEND_BASE_URL = '/promoe'; // localhost
    //    const APP_FRONTEND_BASE_URL = '/';
    const APP_API_BASE_URL = '/promoe/api'; // localhost
    //    const APP_FRONTEND_BASE_URL = '/api';
    const IMG_RESPONSIVE = 'img-responsive';

    //API V1 CONFIG

    //MESSAGE
    const ERR_INTEGRITY_CONSTRAINT_VIOLATION = 'Database Integrity Violation';
    const MESSAGE_SAVE_SUCCESS = 'Data is successfully saved';
    const MESSAGE_SAVE_UPDATE = 'Data is successfully updated';
    const MESSAGE_SAVE_DELETE = 'Data is successfully deleted';

}