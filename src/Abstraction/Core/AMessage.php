<?php
namespace GGGMnASDK\Abstraction\Core;

abstract class AMessage {

    const GENERAL_ERROR = 0;

    const SUCCESS = 1;
    const SUCCESS_WITHOUT_DATA = 204;

    const ALREADY_EXISTING = 401;

    const NOT_FOUND = 404;
    const NO_DATA = 405;
    const NOT_VALID_DATA = 406;

    const MISSING_PARAMS = 500;

} // end class
