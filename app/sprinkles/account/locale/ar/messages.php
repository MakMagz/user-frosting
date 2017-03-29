<?php

/**
 * ar
 *
 * Modern Standard Arabic message token translations for the 'account' sprinkle
 *
 * @package UserFrosting
 * @link http://wwwuserfrostingcom/components/#i18n
 * @author Alex Weissman and Abdullah Seba
 *
 */

return [
    "ACCOUNT" => [
        "@TRANSLATION" => "الحساب",

        "ACCESS_DENIED" => "يبدو أنك لا تملك صلاحية للقيام بذلك",

        "DISABLED" => "هذا الحساب معطل يمكنك الاتصال بنا للحصول على مزيد من المعلومات",

        "EMAIL_UPDATED" => "تم تجديد البريد الإلكتروني بالحساب",

        "INVALID" => "هذا الحساب غير موجود قد تم حذفه يمكنك الاتصا بنا للحصول على مزيد من المعلومات",

        "MASTER_NOT_EXISTS" => "لا يمكنك تسجيل حساب جديد حتى تم إنشاء الحساب الرئيسي",
        "MY"                => "حسابي",

        "SESSION_COMPROMISED"       => "تم اختراق جلسنك يجب عليك الخروج على كافة الأجهزة، ثم تسجيل الدخول مرة أخرى والتأكد من أن المعلومات الخاصة بك لم يعبث بها",
        "SESSION_COMPROMISED_TITLE" => "من الممكن أن حسابك قد اخترق",
        "SESSION_EXPIRED"       => "انتهت جلستك تستطيع تسجيل الدخول مرة أخرى",

        "SETTINGS" => [
            "@TRANSLATION"  => "إعدادات الحساب",
            "DESCRIPTION"   => "غير إعدادات حسابك، بما في ذلك البريد الإلكتروني، واسم وكلمة المرور
",
            "UPDATED"       => "تم تجديد إعدادات الحساب"
        ],

        "TOOLS" => "أدوات الحساب",

        "UNVERIFIED" => "لم يتم التحقق من حسابك بعد افحص في رسائل البريد الإلكتروني و ملف البريد المزعج للحصول على تعليمات تفعيل الحساب",

        "VERIFICATION" => [
            "NEW_LINK_SENT"     => "لقد أرسلنا رابط جديدا لتحقق عبر البريد الإلكتروني إلى {{email}} افحص في رسائل البريد الإلكتروني و ملف البريد المزعج",
            "RESEND"            => "إعادة ارسال بريد التحقق",
            "COMPLETE"          => "لقد تم التحقق من حسابك بنجاح يمكنك الآن تسجيل الدخول",
            "EMAIL"             => "ادخل عنوان البريد الإلكتروني الذي استخدمته للتسجيل، و سوف نرسل البريد الإلكتروني لتحقق مرة أخرى",
            "PAGE"              => "إعادة إرسال البريد الإلكتروني التحقق من حسابك الجديد",
            "SEND"              => "ارسل رابط للتحقق عبر البريد الالكتروني",
            "TOKEN_NOT_FOUND"   => "رمز التحقق غير موجود أو تم تحقق الحساب من قبل",
        ]
    ],

    "EMAIL" => [
        "INVALID"   => "لا يوجد حساب ل <strong>{{email}}</strong>",
        "IN_USE"    => "البريد الإلكتروني <strong>{{email}}</strong> قيد الاستخدام"
    ],

    "FIRST_NAME" => "الاسم الاول",

    "HEADER_MESSAGE_ROOT" => "تسجيل الدخول باسم المستخدم ROOT",

    "LAST_NAME" => "اسم العائلة",

    "LOCALEACCOUNT" => "اللغة التي تستخدم لحسابك",

    "LOGIN" => [
        "@TRANSLATION" => "تسجيل الدخول",

        "ALREADY_COMPLETE"  => "انت بالفعل داخل",
        "SOCIAL"            => "أو الدخول مع",
        "REQUIRED"          => "عذرا، يجب عليك تسجيل الدخول للوصول إلى هذا المكان"
    ],

    "LOGOUT" => "تسجيل الخروج",

    "NAME" => "اسم",

    "PAGE" => [
        "LOGIN" => [
            "DESCRIPTION"   => "سجل الدخول إلى حسابك في {{site_name}} أو سجيل للحصول على حساب جديد",
            "SUBTITLE"      => "التسجيل مجانا أو قم بتسجيل الدخول باستخدام حساب موجود",
            "TITLE"         => "هيا نبدأ",
        ]
    ],

    "PASSWORD" => [
        "@TRANSLATION" => "كلمه المرور",

        "BETWEEN"   => "ما بين {{min}}-{{max}} حروف",

        "CONFIRM"               => "تأكيد كلمة المرور",
        "CONFIRM_CURRENT"       => "تأكيد كلمه المرور الحالي",
        "CONFIRM_NEW"           => "تأكيد كلمة المرور الجديدة",
        "CONFIRM_NEW_EXPLAIN"   => "إعادة إدخال كلمة المرور الجديدة",
        "CONFIRM_NEW_HELP"      => "لازم إذا كان المطلوب اختيار كلمة مرور جديدة",
        "CURRENT"               => "كلمة المرور الحالية",
        "CURRENT_EXPLAIN"       => "يجب عليك تأكيد كلمة المرور الحالية لإجراء التغييرات",

        "FORGOTTEN" => "كلمه المرور منسية",
        "FORGET" => [
            "@TRANSLATION" => "لقد نسيت كلمة المرور",

            "COULD_NOT_UPDATE"  => "لا يمكن تحديث كلمة المرور",
            "EMAIL"             => "ادخل عنوان البريد الإلكتروني الذي استخدمته للتسجيل وسوف نرسل تعليمات لإعادة تعيين كلمة المرور",
            "EMAIL_SEND"        => "أرسل رابط تعيين كلمة المرور عبر البريد الالكتروني",
            "INVALID"           => "لم يتم العثور على إعادة تعيين كلمة المرور، أو انتهت صلاحية رابط حاول <a href=\"{{url}}\">إعادة تقديم طلبك<a>",
            "PAGE"              => "الحصول على رابط لإعادة تعيين كلمة المرور",
            "REQUEST_CANNED"    => "إلغاء طلب كلمة المرور",
            "REQUEST_SENT"      => "تم إرسال رابط إعادة تعيين كلمة المرور {{email}}"
        ],

        "RESET" => [
            "@TRANSLATION"      => "إعادة تعيين كلمة المرور",
            "CHOOSE"            => "اختيار كلمة مرور جديدة للتواصل",
            "PAGE"              => "اختيار كلمة مرور جديدة لحسابك",
            "SEND"              => "تعيين كلمة المرور الجديدة وتسجيل الدخول"
        ],

        "HASH_FAILED"       => "فشلت التجزئة كلمة المرور يرجى الاتصال بمسؤول الموقع",
        "INVALID"           => "كلمة مرور الحالية لا تتطابق مع ما لدينا",
        "NEW"               => "كلمة مرور الجديدة",
        "NOTHING_TO_UPDATE" => "لا يمكنك تحديث مع نفس كلمة مرور",
        "UPDATED"           => "جدد كلمة مرور"
    ],

    "REGISTER"      => "تسجيل",
    "REGISTER_ME"   => "سجلني",

    "REGISTRATION" => [
        "BROKEN"            => "نحن آسفون، هناك مشكلة مع عملية تسجيل الحساب يرجى الاتصال بنا مباشرة للحصول على المساعدة",
        "COMPLETE_TYPE1"    => "لقد سجلت بنجاح يمكنك الآن تسجيل الدخول",
        "COMPLETE_TYPE2"    => "لقد سجلت بنجاح سوف تتلقى قريبا رسالة التحقق تحتوي على رابط لتفعيل حسابك لن تكون قادرا على تسجيل الدخول حتى الانتهاء من هذه الخطوة",
        "DISABLED"          => "عذرا، لقد تم تعطيل تسجيل اي حساب",
        "LOGOUT"            => "لا يمكنك التسجيل للحصول على حساب أثناء تسجيل الدخول",
        "WELCOME"           => "التسجيل سريع وبسيط"
    ],

    "RATE_LIMIT_EXCEEDED"       => "تم تجاوز الحد عددا لهذا الإجراء يجب الانتظار {{delay}} ثواني قبل القيام بمحاولة أخرى",
    "REMEMBER_ME"               => "تذكرنى",
    "REMEMBER_ME_ON_COMPUTER"   => "تذكرني على هذا الحاسوب (غير مستحسن للحواسب العامة)",

    "SIGNIN"                => "تسجيل الدخول",
    "SIGNIN_OR_REGISTER"    => "تسجيل الدخول أو التسجيل",
    "SIGNUP"                => "تسجيل",

    "TOS"           => "الأحكام والشروط",
    "TOS_AGREEMENT" => "من خلال تسجيل حساب جديد في {{site_title}}, انت تقبل <a {{link_attributes | raw}}>الأحكام والشروط</a>",
    "TOS_FOR"       => "الأحكام والشروط ل {{title}}",

    "USERNAME" => [
        "@TRANSLATION" => "اسم المستخدم",

        "CHOOSE"  => "اختيار اسم مستخدم فريد",
        "INVALID" => "اسم المستخدم غير صالح",
        "IN_USE"  => "اسم المستخدم <strong>{{user_name}}</strong> قيد الاستخدام"
    ],

    "USER_ID_INVALID"       => "عدم وجود هوية المستخدم المطلوب",
    "USER_OR_EMAIL_INVALID" => "اسم المستخدم أو عنوان البريد الإلكتروني غير صالح",
    "USER_OR_PASS_INVALID"  => "اسم المستخدم أو كلمة المرور غير صالحة",

    "WELCOME" => "مرحبا بعودتك, {{first_name}}"
];
