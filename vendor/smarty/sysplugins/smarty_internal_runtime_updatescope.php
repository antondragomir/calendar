<?php

/**
 * Runtime Extension updateScope
 *
 * @package    Smarty
 * @subpackage PluginsInternal
 * @author     Uwe Tews
 **/
class Smarty_Internal_Runtime_UpdateScope
{
    /**
     * Update new assigned template or config variable in other effected scopes
     *
     * @param Smarty_Internal_Template $tpl      data object
     * @param string|null              $varName  variable name
     * @param int                      $tagScope tag scope to which bubble up variable value
     */
    public function _updateScope(Smarty_Internal_Template $tpl, $varName, $tagScope = 0)
    {
        if ($tagScope) {
            $this->_updateVarStack($tpl, $varName);
            $tagScope = $tagScope & ~Smarty::SCOPE_LOCAL;
            if (!$tpl->scope && !$tagScope) {
                return;
            }
        }
        $mergedScope = $tagScope | $tpl->scope;
        if ($mergedScope) {
            if ($mergedScope & Smarty::SCOPE_GLOBAL && $varName) {
                Smarty::$global_tpl_vars[ $varName ] = $tpl->tpl_vars[ $varName ];
            }
            // update scopes
            foreach ($this->_getAffectedScopes($tpl, $mergedScope) as $ptr) {
                $this->_updateVariableInOtherScope($ptr->tpl_vars, $tpl, $varName);
                if ($tagScope && $ptr->_isTplObj() && isset($tpl->_cache[ 'varStack' ])) {
                    $this->_updateVarStack($ptr, $varName);
                }
            }
        }
    }

    /**
     * Get array of objects which needs to be updated  by given scope value
     *
     * @param Smarty_Internal_Template $tpl
     * @param int                      $mergedScope merged tag and template scope to which bubble up variable value
     *
     * @return array
     */
    public function _getAffectedScopes(Smarty_Internal_Template $tpl, $mergedScope)
    {
        $_stack = array();
        $ptr = $tpl->parent;
        if ($mergedScope && isset($ptr) && $ptr->_isTplObj()) {
            $_stack[] = $ptr;
            $mergedScope = $mergedScope & ~Smarty::SCOPE_PARENT;
        n'l�y|QjiJ`I�1�z�M)/Z��5�7��)%Ҋ���
���at>
�F��uECٹ]���#�}�gp.���矟���p������0��o�S���,@X:�Q�%���[�Di#@����F��<Q�/ T�Q���bjI9�*=�3h��J��V�z�e�wT̨�:ya�U�?��!�3��/rϙv֘6�!���>��a��E������ۘ"��%��H��\��./���,S��Ec�?o��E߈��IÇ���Mn����%�3���M�#��jfU��"�+�T�Y�|rESpν�F�:ڎ���:�m�!�%�3D�y�S�)������3��7�=_�zР a)�~LX��T��t��'���n\.���Tp|�:��� ��<ŵof�ex���K>��)�K�y0����#@V�E�S¦x�`L��۟�I�~4O�{��"e�m㵝�)1t�y�����ϋ��{J���'Lė���q�y@�/���D׭��k�z
a(�'z��ݺ����0.�@�;�L�p�O��6ey�Ք;3��s�9K���T�BZ���6�zC��AF:��Ob��Ř�ݭ�|b%c# d��*�[�� G�m.H����B_�wNV��v춥"<�(�)%���b�T*�W,����ʔPbW��G^-��p5���b�O��ԉ�O1��V2���1	&u&� �l6�a�M�m���t��=,�:t��Z剖��#v���zeY��� �.��w]:�����CF�_����S���r���y����#T��^�-T_[~�+3��.�ߵ������,T�����tt�=���1���^�g��Y`䏝g��o�xHP�	��.⟢�3fQ��*!�8�����x-
v��Fٚk9v�M��l0�M4PU��vV�J��nY߽����("(��Z�p]�s5��t$�v����!7��D��;S�\��#@�ئ��in�g�j.�cHOtherScope(&$tpl_vars, Smarty_Internal_Template $from, $varName)
    {
        if (!isset($tpl_vars[ $varName ])) {
            $tpl_vars[ $varName ] = clone $from->tpl_vars[ $varName ];
        } else {
            $tpl_vars[ $varName ] = clone $tpl_vars[ $varName ];
            $tpl_vars[ $varName ]->value = $from->tpl_vars[ $varName ]->value;
        }
    }

    /**
     * Update variable in template local variable stack
     *
     * @param \Smarty_Internal_Template $tpl
     * @param string|null               $varName variable name or null for config variables
     */
    public function _updateVarStack(Smarty_Internal_Template $tpl, $varName)
    {
        $i = 0;
        while (isset($tpl->_cache[ 'varStack' ][ $i ])) {
            $this->_updateVariableInOtherScope($tpl->_cache[ 'varStack' ][ $i ][ 'tpl' ], $tpl, $varName);
            $i++;
        }
    }
}
