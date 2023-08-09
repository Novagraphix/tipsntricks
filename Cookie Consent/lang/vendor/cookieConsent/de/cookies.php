<?php
return [
    'title' => 'Wir benutzen Cookies',
    'intro' => 'Diese Website verwendet Cookies, um das Benutzererlebnis insgesamt zu verbessern.',
    'link' => 'Weitere Informationen finden Sie in unserer <a href=":url">Cookie-Richtlinie</a>.',

    'essentials' => 'Nur das Nötigste',
    'all' => 'Alle akzeptieren',
    'customize' => 'Anpassen',
    'manage' => 'Cookies verwalten',
    'details' => [
        'more' => 'Mehr Details',
        'less' => 'Weniger Details',
    ],
    'save' => 'Speichern',

    'categories' => [
        'essentials' => [
            'title' => 'Notwendige Cookies',
            'description' => 'Es gibt einige Cookies, die wir einbinden müssen, damit bestimmte Webseiten funktionieren. Sie bedürfen daher nicht Ihrer Einwilligung.',
        ],
        'analytics' => [
            'title' => 'Analyse Cookies',
            'description' => 'Wir nutzen diese für interne Untersuchungen, wie wir den Service, den wir allen unseren Nutzern bieten, verbessern können. Diese Cookies bewerten, wie Sie mit unserer Website interagieren.',
        ],
        'optional' => [
            'title' => 'Optionale Cookies',
            'description' => 'Diese Cookies ermöglichen Funktionen, die Ihr Benutzererlebnis verbessern könnten, ihr Fehlen hat jedoch keine Auswirkungen auf Ihre Fähigkeit, auf unserer Website zu surfen.',
        ],
    ],

    'defaults' => [
        'consent' => 'Wird zum Speichern der Cookie-Zustimmungseinstellungen des Benutzers verwendet.',
        'session' => 'Wird zur Identifizierung der Browsersitzung des Benutzers verwendet.',
        'csrf' => 'Wird verwendet, um sowohl den Benutzer als auch unsere Website vor Cross-Site-Request-Forgery-Angriffen zu schützen.',
        '_ga' => 'Das von Google Analytics verwendete Haupt-Cookie ermöglicht es einem Dienst, einen Besucher von einem anderen zu unterscheiden.',
        '_ga_ID' => 'Wird von Google Analytics verwendet, um den Sitzungsstatus beizubehalten.',
        '_gid' => 'Wird von Google Analytics zur Identifizierung des Benutzers verwendet.',
        '_gat' => 'Wird von Google Analytics verwendet, um die Anfragerate zu drosseln.',
    ],
];
