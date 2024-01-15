<?php

use App\Enum\RoleUserEnum;
use Core\Http\Request;

if (!function_exists('isAdmin')) {
     function isAdmin()
     {
          $obj_request = new Request;
          $admin_ary = $obj_request->getUser();
          if ($admin_ary !== null && $admin_ary['role'] == RoleUserEnum::ADMIN) {
               return TRUE;
          }
          return FALSE;
     }
}

if (!function_exists('isLogged')) {
     function isLogged()
     {
          $obj_request = new Request;
          $admin_ary = $obj_request->getUser();
          if (isset($admin_ary)) {
               return TRUE;
          } else {
               return FALSE;
          }
     }
}


if (!function_exists('setDefineArray')) {
     function setDefineArray($name, $ary)
     {
          if ($name == "") return;
          global $$name;
          if (isset($$name)) return;
          $temp = array();
          foreach ($ary as $key => $value) {
               $temp[$key] = $value;
          }
          $$name = $temp;
          return $$name;
     }
}

if (!function_exists('setTempGlobal')) {
     function setTempGlobal($variableGLOBALS, $globalsVarName, $tempGlobal)
     {
          if (!empty($variableGLOBALS)) {
               foreach ($variableGLOBALS as $each) {
                    $globalsVarName[] = $each;
                    $tempGlobal[$each] = $GLOBALS[$each];
                    unset($GLOBALS[$each]);
               }
          }
          return array($globalsVarName, $tempGlobal);
     }
}
