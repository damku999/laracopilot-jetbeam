<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $features = [
            [
                'title' => 'Dashboard',
                'description' => 'Gain real-time insights for informed decisions.',
                'icon' => 'chart-bar'
            ],
            [
                'title' => 'Customer Data Management',
                'description' => 'Organize and access customer information easily.',
                'icon' => 'users'
            ],
            [
                'title' => 'Insurance Data Management',
                'description' => 'Centralize all your insurance data for better control.',
                'icon' => 'shield-check'
            ],
            [
                'title' => 'Policy Upload Feature',
                'description' => 'Simplify policy management with easy uploads.',
                'icon' => 'cloud-upload'
            ],
            [
                'title' => 'Customer Document Upload Feature',
                'description' => 'Allow customers to upload necessary documents securely.',
                'icon' => 'document-upload'
            ],
            [
                'title' => 'Commission Calculation',
                'description' => 'Automate commission tracking for accuracy.',
                'icon' => 'calculator'
            ],
            [
                'title' => 'MIS Reports',
                'description' => 'Generate insightful reports for strategic planning.',
                'icon' => 'document-report'
            ],
            [
                'title' => 'Claim Tracking',
                'description' => 'Monitor claims with transparency and efficiency.',
                'icon' => 'clipboard-check'
            ],
            [
                'title' => 'Reminders',
                'description' => 'Stay connected and informed with automated reminders.',
                'icon' => 'bell'
            ]
        ];

        $testimonials = [
            [
                'name' => 'Parth Rawal',
                'role' => 'Insurance Advisor',
                'content' => 'Using MIDAS has been an incredible experience for our team. The intuitive interface makes it easy to navigate, while the powerful features address all our needs, significantly streamlining our workflows. Their customer support is responsive and knowledgeable, always providing timely assistance. Since implementing MIDAS, our operational efficiency has improved dramatically. I highly recommend it to any insurance agents looking to optimize their processes!'
            ],
            [
                'name' => 'Vikram Desai',
                'role' => 'Insurance Advisor',
                'content' => 'Since we integrated MIDAS into our operations, our efficiency has skyrocketed! We\'ve seen a 40% increase in policy management speed and our customer satisfaction scores have never been higher. MIDAS truly transformed the way we handle insurance.'
            ],
            [
                'name' => 'Raj Patel',
                'role' => 'Insurance Advisor',
                'content' => 'MIDAS has been a game changer for our business. With its powerful dashboards and streamlined processes, we achieved a 30% increase in our annual earnings. The 24/7 support is exceptional, making it easy to navigate any challenges!'
            ]
        ];

        $pricing = [
            [
                'name' => 'Midas Monthly',
                'price' => '999',
                'period' => 'month',
                'description' => 'Ideal for startups or smaller teams looking for flexibility.',
                'subtitle' => 'Perfect for businesses wanting to test the platform with a low commitment.'
            ],
            [
                'name' => 'Midas Annually',
                'price' => '9,999',
                'period' => 'year',
                'description' => 'Best suited for established businesses ready to invest in long-term growth.',
                'subtitle' => 'Great for teams that require full access to features and consistent support.'
            ]
        ];

        return view('welcome', compact('features', 'testimonials', 'pricing'));
    }

    public function about()
    {
        return view('about');
    }

    public function pricing()
    {
        $pricing = [
            [
                'name' => 'Midas Monthly',
                'price' => '999',
                'period' => 'month',
                'description' => 'Ideal for startups or smaller teams looking for flexibility.',
                'subtitle' => 'Perfect for businesses wanting to test the platform with a low commitment.',
                'features' => [
                    'Dashboard Access',
                    'Customer Management',
                    'Policy Upload',
                    'Basic Reports',
                    'Email Support'
                ]
            ],
            [
                'name' => 'Midas Annually',
                'price' => '9,999',
                'period' => 'year',
                'description' => 'Best suited for established businesses ready to invest in long-term growth.',
                'subtitle' => 'Great for teams that require full access to features and consistent support.',
                'features' => [
                    'All Monthly Features',
                    'Advanced Analytics',
                    'Commission Tracking',
                    'Priority Support',
                    'Custom Reports',
                    'API Access'
                ]
            ]
        ];

        return view('pricing', compact('pricing'));
    }

    public function contact()
    {
        return view('contact');
    }
}