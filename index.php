<?php
/*
 * In case the seo parameters are not configured we will fall back to the default.
 */
$keywords = [
    'The Acquired Taste',
    'Whisky',
    'Scotch',
    'Buy Scotch',
    'Buy Whisky',
    'Hoorn',
    'Noord-Holland',
    'Netherlands',
    'Cheap',
    'Landing page',
    'Index',
    'Home',
    'Single Malt',
    'Aged',
    'Smoked',
    '1 Year',
    '2 Years',
    '3 Years',
    '4 Years',
    '5 Years',
    '6 Years',
    '7 Years',
    '8 Years',
    '9 Years',
    '10 Years',
    '11 Years',
    '12 Years',
    '13 Years',
    '14 Years',
    '15 Years',
    '16 Years',
    '17 Years',
    '18 Years',
    '19 Years',
    '20 Years',
    '20+ Years',
];

/*
 * Routing the user
 */
$location = $_GET['page'] ?? 'home';

switch ($location) {
    /*
     * - Home
     * - Index
     * - Landing
     * - ?page=*
     */
    case 'home':
        $title = 'The Acquired Taste - Home';
        $description = 'The homepage of Acquired Taste, buy whisky rated by professionals and lovers!';

        $meta = 'The Acquired Taste - Home';
        $tags = array_merge($keywords, [

        ]);

        $page = './view/index.php';
        break;

    // About
    case 'about':
        $title = 'The Acquired Taste - About us';
        $description = 'The Acquired Taste, Learn about our team, vision, goals and more!';

        $meta = 'The Acquired Taste - About us';
        $tags = array_merge($keywords, [
            'About us',
            'Learn more',
            'Who are we',
            'Our story',
            'Our team',
            'Our goal',
            'Our vision'
        ]);

        $page ='./view/about.php';
        break;

    // Contact
    case 'contact':
        $title = 'The Acquired Taste - Contact';
        $description = 'Get in touch with us!';

        $meta = 'The Acquired Taste - Contact';
        $tags = array_merge($keywords, [
            'contact page',
            'get in touch',
            'reach out',
            'location',
            'address',
            'email',
            'telephone',
            'city',
            'street',
            'province',
            'country'
        ]);

        $page = './view/contact.php';
        break;

    // Contact
    case 'subscribe':
        $title = 'The Acquired Taste - Subscribe';
        $description = 'Configure your monthly whisky box!';

        $meta = 'The Acquired Taste - Contact';
        $tags = array_merge($keywords, [
            'whisky box',
            'subscribe',
            'cheap',
            'affordable',
            'large assortment',
            'the best',
            'samples',
            'discount',
            'get started',
            'customize'
        ]);

        $page = './view/subscribe.php';
        break;

    // Error 400
    case '400':
        $title = 'The Acquired Taste - (Bad Request)';
        $description = 'Error (400) Bad Request.';

        $meta = 'Error (400) - The Acquired Taste';
        $tags = array_merge($keywords, [
            'Error',
            'Something went wrong',
            '400',
            'Bad Request'
        ]);

        $page = './view/400.php';
        break;

    // Error 401
    case '401':
        $title = 'The Acquired Taste - (Unauthorized access)';
        $description = 'Error (401) Unauthorized access.';

        $meta = 'Error (401) - The Acquired Taste';
        $tags = array_merge($keywords, [
            'Error',
            'Something went wrong',
            '401',
            'Unauthorized access.'
        ]);

        $page = './view/401.php';
        break;

    // Error 403
    case '403':
        $title = 'The Acquired Taste - (Forbidden)';
        $description = 'Error (403) Forbidden! You are not allowed to visit this page.';

        $meta = 'Error (403) - The Acquired Taste';
        $tags = array_merge($keywords, [
            'Error',
            'Something went wrong',
            '403',
            'Forbidden.'
        ]);

        $page = './view/403.php';
        break;

    // Error 404
    case '404':
        $title = 'The Acquired Taste - (Page not found)';
        $description = 'Error (404) Page not found! The page you tried to visit doesn\'t exist (anymore).';

        $meta = 'Error (400) - The Acquired Taste';
        $tags = array_merge($keywords, [
            'Error',
            'Something went wrong',
            '404',
            'Page not found'
        ]);

        $page = './view/404.php';
        break;

    // Error 500
    case '500':
        $title = 'The Acquired Taste - (Internal server error)';
        $description = 'Error (500) Internal server error! This is entirely our fault, please contact us!';

        $meta = 'Error (400) - The Acquired Taste';
        $tags = array_merge($keywords, [
            'Error',
            'Something went wrong',
            '500',
            'Internal server error'
        ]);

        $page = './view/500.php';
        break;
}

/*
 * Including footer.php
 */
include_once('./view/includes/header.php');
include_once('./view/includes/navigation.php');
include_once($page);
include_once('./view/includes/footer.php');