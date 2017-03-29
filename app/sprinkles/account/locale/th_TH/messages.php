<?php

/**
 * th_TH
 *
 * Thai message token translations for the 'account' sprinkle.
 *
 * @package UserFrosting
 * @link http://www.userfrosting.com/components/#i18n
 * @author Karuhut Komol
 *
 */

return [
    "ACCOUNT" => [
        "@TRANSLATION" => "บัญชี",

        "ACCESS_DENIED" => "หืมม ดูเหมือนว่าคุณไม่ได้รับอนุญาตให้ทำเช่นนั้น",

        "DISABLED" => "บัญชีนี้ถูกปิดการใช้งานไปแล้ว กรุณาติดต่อเราสำหรับข้อมูลเพิ่มเติม",

        "EMAIL_UPDATED" => "ปรับปรุงบัญชีอีเมลแล้ว",

        "INVALID" => "ไม่พบบัญชีนี้ มันอาจถูกลบไปแล้ว กรุณาติดต่อเราสำหรับข้อมูลเพิ่มเติม",

        "MASTER_NOT_EXISTS" => "คุณไม่สามารถสมัครสมาชิกได้จนกว่าจะสร้างบัญชีหลัก!",
        "MY"                => "บัญชีของฉัน",

        "SESSION_COMPROMISED"       => "เซสชันของคุณถูกลักลอบใช้ คุณควรจะออกจากระบบบนอุปกรณ์ทั้งหมดแล้วกลับเข้าสู่ระบบและตรวจสอบให้แน่ใจว่าไม่มีการแก้ไขข้อมูลของคุณ",
        "SESSION_COMPROMISED_TITLE" => "บัญชีของคุณอาจถูกบุกรุก",
        "SESSION_EXPIRED"       => "เซสชันของคุณหมดอายุ กรุณาเข้าสู่ระบบอีกครั้ง",

        "SETTINGS" => [
            "@TRANSLATION"  => "การตั้งค่าบัญชี",
            "DESCRIPTION"   => "ปรับปรุงการตั้งค่าบัญชีของคุณ รวมไปถึงอีเมล ชื่อ และรหัสผ่าน",
            "UPDATED"       => "ปรับปรุงการตั้งค่าบัญชีของคุณแล้ว"
        ],

        "TOOLS" => "เครื่องมือบัญชี",

        "UNVERIFIED" => "บัญชีของคุณยังไม่ได้รับการยืนยัน กรุณาตรวจสอบกล่องอีเมลและจดหมายขยะของคุณสำหรับขั้นตอนการเปิดใช้งานบัญชี",

        "VERIFICATION" => [
            "NEW_LINK_SENT"     => "เราได้ส่งลิงก์สำหรับการยืนยันใหม่ไปยังอีเมล {{email}} กรุณาตรวจสอบอีเมลนี้ในกล่องอีเมลและจดหมายขยะของคุณ",
            "RESEND"            => "ส่งอีเมลยืนยันอีกครั้ง",
            "COMPLETE"          => "คุณได้ยืนยันอีเมลของคุณเรียบร้อยแล้ว คุณสามารถเข้าสู่ระบบได้ทันที",
            "EMAIL"             => "กรุณากรอกอีเมลที่คุณได้ใช้สมัครไว้แล้วอีเมลยืนยันจะถูกส่งไปให้ใหม่",
            "PAGE"              => "ส่งอีเมลยืนยันสำหรับบัญชีของฉันใหม่",
            "SEND"              => "ส่งอีเมลยืนยันให้บัญชีของฉัน",
            "TOKEN_NOT_FOUND"   => "ไม่พบโทเคนยืนยันอีเมล / บัญชีนี้ได้ยืนยันแล้ว",
        ]
    ],

    "EMAIL" => [
        "INVALID"   => "อีเมล <strong>{{email}}</strong> ไม่มีอยู่จริง",
        "IN_USE"    => "อีเมล <strong>{{email}}</strong> ได้ถูกใช้งานแล้ว"
    ],

    "FIRST_NAME" => "ชื่อจริง",

    "HEADER_MESSAGE_ROOT" => "คุณได้เข้าสู่ระบบเป็นผู้ดูแลสูงสุด",

    "LAST_NAME" => "นามสกุล",

    "LOCALE.ACCOUNT" => "ภาษาและสถานที่ที่จะใช้สำหรับบัญชีของคุณ",

    "LOGIN" => [
        "@TRANSLATION" => "เข้าสู่ะระบบ",

        "ALREADY_COMPLETE"  => "คุณได้เข้าสู่ระบบอยู่แล้ว!",
        "SOCIAL"            => "หรือเข้าสู่ระบบด้วย",
        "REQUIRED"          => "ขออภัย คุณจะต้องเข้าสู่ระบบเพื่อเข้าถึงส่วนนี้"
    ],

    "LOGOUT" => "ออกจากระบบ",

    "NAME" => "ชื่อ",

    "PAGE" => [
        "LOGIN" => [
            "DESCRIPTION"   => "เข้าสู่ระบบไปยังบัญชี {{site_name}} หรือสมัครสมาชิกสำหรับบัญชีใหม่",
            "SUBTITLE"      => "สมัครสมาชิกฟรี หรือเข้าสู่ระบบด้วยบัญชีที่มีอยู่",
            "TITLE"         => "มาเริ่มกันเลย!",
        ]
    ],

    "PASSWORD" => [
        "@TRANSLATION" => "รหัสผ่าน",

        "BETWEEN"   => "ระหว่าง {{min}}-{{max}} ตัวอักษร",

        "CONFIRM"               => "ยืนยันรหัสผ่าน",
        "CONFIRM_CURRENT"       => "กรุณายืนยันรหัสผ่านปัจจุบันของคุณ",
        "CONFIRM_NEW"           => "ยืนยันรหัสผ่านใหม่",
        "CONFIRM_NEW_EXPLAIN"   => "กรอกรหัสผ่านใหม่ของคุณอีกครั้ง",
        "CONFIRM_NEW_HELP"      => "กรอกเฉพาะเมื่อคุณต้องการตั้งรหัสผ่านใหม่",
        "CURRENT"               => "รหัสผ่านปัจจุบัน",
        "CURRENT_EXPLAIN"       => "คุณจะต้องยืนยันรหัสผ่านปัจจุบันเพื่อแก้ไขข้อมูล",

        "FORGOTTEN" => "ลืมรหัสผ่าน",
        "FORGET" => [
            "@TRANSLATION" => "ฉันลืมรหัสผ่านของฉัน",

            "COULD_NOT_UPDATE"  => "ไม่สามารถปรับปรุงรหัสผ่าน",
            "EMAIL"             => "กรุณากรอกที่อยู่อีเมลที่คุณเคยใช้เข้าสู่ระบบ ลิงก์ขั้นตอนการรีเซ็ตรหัสผ่านของคุณจะถูกส่งไปให้คุณ",
            "EMAIL_SEND"        => "ลิงก์รีเซ็ตรหัสผ่านจากอีเมล",
            "INVALID"           => "ขอรีเซ็ตรหัสผ่านนี้ไม่มีอยู่ หรือหมดอายุไปแล้ว กรุณาลอง <a href=\"{{url}}\">ส่งคำขอของคุณอีกครั้ง<a>",
            "PAGE"              => "รับลิงก์สำหรับการรีเซ็ตรหัสผ่านของคุณ",
            "REQUEST_CANNED"    => "คำขอลืมรหัสผ่านได้ถูกยกเลิก",
            "REQUEST_SENT"      => "ลิงก์รีเซ็ตรหัสผ่านได้ส่งไปยัง {{email}}"
        ],

        "RESET" => [
            "@TRANSLATION"      => "รีเซ็ตรหัสผ่าน",
            "CHOOSE"            => "กรุณาเลือกรหัสผ่านใหม่เพื่อดำเนินการต่อ",
            "PAGE"              => "เลือกรหัสผ่านใหม่สำหรับบัญชีของคุณ",
            "SEND"              => "ตั้งรหัสผ่านใหม่และเข้าสู่ระบบ"
        ],

        "HASH_FAILED"       => "เข้ารหัสรหัสผ่านล้มเหลว กรุณาติดต่อผู้ดูแลระบบของเว็บไซต์",
        "INVALID"           => "รหัสผ่านปัจจุบันไม่ตรงกับรหัสผ่านที่เราบันทึกไว้",
        "NEW"               => "รหัสผ่านใหม่",
        "NOTHING_TO_UPDATE" => "คุณไม่สามารถปรังปรุงด้วยรหัสผ่านเดียวกัน",
        "UPDATED"           => "ปรังปรุงรหัสผ่านของบัญชีแล้ว"
    ],

    "REGISTER"      => "สมัครสมาชิก",
    "REGISTER_ME"   => "ให้ฉันสมัครสมาชิกด้วย",

    "REGISTRATION" => [
        "BROKEN"            => "เราขออภัย มันมีปัญหาในการดำเนินการสมัครสมาชิกของเรา กรุณาติดต่อเราโดยตรงเพื่อขอความช่วยเหลือ",
        "COMPLETE_TYPE1"    => "คุณได้สมัครสมาชิกเรียบร้อยแล้ว คุณสามารถเข้าสู่ระบบได้ทันที",
        "COMPLETE_TYPE2"    => "คุณได้สมัครสมาชิกเรียบร้อยแล้ว คุณจะได้รับอีเมลยืนยันที่มีลิงก์สำหรับเปิดใช้งานบัญชีของคุณอยู่ คุณจะไม่สามารถเข้าสู่ระบบจนกว่าคุณจะยืนยันอีเมลแล้ว",
        "DISABLED"          => "เราขออภัย ระบบสมัครสมาชิกได้ถูกปิดไว้",
        "LOGOUT"            => "เราขออภัย คุณไม่สามารถสมัครสมาชิกขณะที่เข้าสู่ระบบอยู่ กรุณาออกจากระบบก่อน",
        "WELCOME"           => "การสมัครสมาชิกนั้นรวดเร็ว และง่ายดาย"
    ],

    "RATE_LIMIT_EXCEEDED"       => "ถึงขีดจำกัดสำหรับการกระทำนี้แล้ว คุณจะต้องรออีก {{delay}} วินาที ก่อนที่คุณจะได้รับอนุญาตให้ลองใหม่อีกครั้ง",
    "REMEMBER_ME"               => "จำฉันไว้ในระบบ!",
    "REMEMBER_ME_ON_COMPUTER"   => "จำฉันไว้ในระบบบนคอมพิวเตอร์นี้ (ไม่แนะนำสำหรับคอมพิวเตอร์สาธารณะ)",

    "SIGNIN"                => "เข้าสู่ะระบบ",
    "SIGNIN_OR_REGISTER"    => "เข้าสู่ระบบหรือสมัครสมาชิก",
    "SIGNUP"                => "สมัครสมาชิก",

    "TOS"           => "ข้อตกลงและเงื่อนไข",
    "TOS_AGREEMENT" => "ในการสมัครสมาชิกกับ {{site_title}} หมายถึงคุณยอมรับ <a {{link_attributes}}>ข้อตกลงและเงื่อนไข</a> แล้ว",
    "TOS_FOR"       => "ข้อตกลงและเงื่อนไขสำหรับ {{title}}",

    "USERNAME" => [
        "@TRANSLATION" => "ชื่อผู้ใช้",

        "CHOOSE"  => "เลือกชื่อผู้ใช้ที่เป็นเป็นเอกลักษณ์",
        "INVALID" => "ชื่อผู้ใช้ไม่ถูกต้อง",
        "IN_USE"  => "ชื่อผู้ใช้ <strong>{{user_name}}</strong> ถูกใช้งานแล้ว"
    ],

    "USER_ID_INVALID"       => "ไม่พบหมายเลขผู้ใช้ที่ร้องขอมา",
    "USER_OR_EMAIL_INVALID" => "ชื่อผู้ใช้หรือที่อยู่อีเมลไม่ถูกต้อง",
    "USER_OR_PASS_INVALID"  => "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง",

    "WELCOME" => "ยินดีต้อนรับ {{first_name}}"
];
