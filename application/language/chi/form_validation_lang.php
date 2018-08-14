<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2018, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']		= '在 {field} 字段是必需的.';
$lang['form_validation_isset']			= '在 {field} 字段必须具有一个值.';
$lang['form_validation_valid_email']		= '在 {field} 字段必须包含一个有效的电子邮件地址.';
$lang['form_validation_valid_emails']		= '在 {field} 字段必须包含所有有效的电子邮件地址.';
$lang['form_validation_valid_url']		= '在 {field} 字段必须包含一个有效的 URL.';
$lang['form_validation_valid_ip']		= '在 {field} 字段必须包含一个有效的 IP.';
$lang['form_validation_min_length']		= '在 {field} 字段必须至少 {param} 字符的长度.';
$lang['form_validation_max_length']		= '在 {field} 字段不能超过 {param} 字符的长度.';
$lang['form_validation_exact_length']		= '在 {field} 字段必须完全 {param} 字符的长度.';
$lang['form_validation_alpha']			= '在 {field} 字段只能包含字母.';
$lang['form_validation_alpha_numeric']		= '在 {field} 字段只能包含字母数字字符.';
$lang['form_validation_alpha_numeric_spaces']	= '在 {field} 字段只能包含字母数字字符和空格.';
$lang['form_validation_alpha_dash']		= '在 {field} 字段只能包含字母数字字符、底线和破折号.';
$lang['form_validation_numeric']		= '在 {field} 字段只能包含数字.';
$lang['form_validation_is_numeric']		= '在 {field} 字段只能包含数字字符.';
$lang['form_validation_integer']		= '在 {field} 字段必须包含一个整数.';
$lang['form_validation_regex_match']		= '在 {field} 字段的格式不正确.';
$lang['form_validation_matches']		= '在 {field} 外地不匹配的 {param} 现场.';
$lang['form_validation_differs']		= '在 {field} 字段必须不同于 {param} 现场.';
$lang['form_validation_is_unique'] 		= '在 {field} 字段必须包含一个独特的价值.';
$lang['form_validation_is_natural']		= '在 {field} 字段只能包含数字.';
$lang['form_validation_is_natural_no_zero']	= '在 {field} 字段只能包含数字和必须大于 0.';
$lang['form_validation_decimal']		= '在 {field} 字段必须包含一个小数.';
$lang['form_validation_less_than']		= '在 {field} 字段必须包含一个数字不到 {param}.';
$lang['form_validation_less_than_equal_to']	= '在 {field} 字段必须包含一个数字小于或等于 {param}.';
$lang['form_validation_greater_than']		= '在 {field} 字段必须包含一个大于 {param}.';
$lang['form_validation_greater_than_equal_to']	= '在 {field} 字段必须包含一个大于或等于 {param}.';
$lang['form_validation_error_message_not_set']	= '无法访问错误消息对应的字段名称 {field}.';
$lang['form_validation_in_list']		= '在 {field} 字段必须是一个: {param}.';
