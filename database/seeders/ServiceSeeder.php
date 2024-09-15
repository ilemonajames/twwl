<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'service_icon' => 'counceling.png',
            'service_image' => 'counceling.jpg',
            'service_title' => 'Individuals, Couples, and Families',
            'service_description' => "We provide tailored counseling and coaching to support individuals, couples, and families in navigating life's challenges. Whether you are seeking personal growth, relationship improvement, or family support, we help you develop tools to foster mental well-being and stronger connections.
            <h4>Couples Counseling & Coaching</h4>
            <p>We serve all couples, including:</p>
            <ol>
            <li>LGBTQIA+ couples.</li>
            <li>Pre-marital (dating or engaged) couples</li>
            <li> Cohabiting couples (living together but not married)</li>
            <li> Married couples (husbands, wives, etc.)</li>
            </ol>
            <p>Our goal is to help couples navigate the complexities of their relationships, improve communication, resolve conflicts, and foster a secure emotional connection.</p><br>
            <h4>Individual Counseling</h4>
            <p>We provide support for individuals dealing with:</p>
            <ol>
            <li>Depression.</li>
            <li>Anxiety</li>
            <li> PTSD and trauma-related challenges</li>
            </ol>
            <p>Our approach is personalized to meet the mental health needs of each client, offering tools and strategies to foster healing, resilience, and self-growth.</p>

            ",
        ]);

       Service::create([
            'service_icon' => 'mental.png',
            'service_image' => 'mental.jpg',
            'service_title' => 'Mental Health Providers',
            'service_description' => "We work with mental health providers to create custom-designed curricula tailored to their clients' specific needs. Our goal is to enhance the effectiveness of their services by providing structured, evidence-based programs that address mental health challenges."
        ]);

        Service::create([
            'service_icon' => 'organization.png',
            'service_image' => 'organization.jpg',
            'service_title' => 'Organizations',
            'service_description' => "Our services extend to organizations seeking to support their teams' mental health and well-being. We offer workshops, coaching, and curriculum development focused on improving workplace dynamics, team cohesion, and emotional wellness."
        ]);

    }
}
