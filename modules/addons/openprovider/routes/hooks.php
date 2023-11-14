<?php
/**
 * Hooks
 * ----------------
 *
 * Instead of mapping routes automagically to controllers, we use
 * a whitelist of routes with the controllers mapped.
 *
 * If the string only contains a-zA-Z0-9_, the namespace will be
 * guessed and added.
 */
return [
    // [
    //     // https://developers.whmcs.com/hooks-reference/domain/#preregistrarrenewdomain

    //     'hookPoint' => 'PreRegistrarRenewDomain',
    //     'priority' =>  100,
    //     'controller' => 'RenewHookController@processRenewal'
    // ],
    // [
    //     // https://developers.whmcs.com/hooks-reference/domain/#domainedit
    //     'hookPoint' => 'DomainEdit',
    //     'priority' =>  1,
    //     'controller' => 'RenewHookController@processAutorenewalSetting'
    // ],
];