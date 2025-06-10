@extends('layouts.app')
@section('title', 'Services - VUT Clinic System')
@section('content')
<div class="container mx-auto px-4 max-w-7xl">
    <h2 class="text-4xl md:text-5xl font-extrabold text-center text-blue-800 mb-8 tracking-tight drop-shadow-sm">
        Our Comprehensive Student Healthcare Services
    </h2>
    <p class="text-lg md:text-xl text-gray-700 text-center mb-12 max-w-2xl mx-auto leading-relaxed">
        At VUT Clinic, we are dedicated to providing accessible, confidential, and high-quality healthcare services tailored to the unique needs of our students. Your health and well-being are our top priority, ensuring you can focus on your studies and thrive during your time at VUT.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
        {{-- Service Card Example --}}
        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-blue-700 flex flex-col">
            <div class="flex items-center mb-4">
                <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 mr-3">
                    <i class="fas fa-stethoscope text-2xl text-blue-500"></i>
                </span>
                <h3 class="text-xl font-bold text-blue-800">Primary Healthcare</h3>
            </div>
            <p class="text-gray-700 mb-3 flex-1">
                Accessible general consultations for a wide range of minor ailments, common illnesses, minor injuries, and day-to-day health concerns. Our experienced medical team provides accurate diagnoses and effective treatment plans.
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-1 mb-2">
                <li>Symptom assessment & diagnosis</li>
                <li>Prescription services</li>
                <li>Basic wound care</li>
                <li>Referrals to specialists (if necessary)</li>
            </ul>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-blue-700 flex flex-col">
            <div class="flex items-center mb-4">
                <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 mr-3">
                    <i class="fas fa-heartbeat text-2xl text-blue-500"></i>
                </span>
                <h3 class="text-xl font-bold text-blue-800">Chronic Disease Management</h3>
            </div>
            <p class="text-gray-700 mb-3 flex-1">
                Comprehensive and ongoing care for students living with chronic conditions such as diabetes, asthma, hypertension, and epilepsy. We provide personalized management plans, regular monitoring, medication adherence support, and education.
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-1 mb-2">
                <li>Personalized care plans</li>
                <li>Regular check-ups & medication reviews</li>
                <li>Lifestyle advice & support</li>
                <li>Coordination with external specialists</li>
            </ul>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-blue-700 flex flex-col">
            <div class="flex items-center mb-4">
                <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 mr-3">
                    <i class="fas fa-venus-mars text-2xl text-blue-500"></i>
                </span>
                <h3 class="text-xl font-bold text-blue-800">Reproductive & Sexual Health</h3>
            </div>
            <p class="text-gray-700 mb-3 flex-1">
                Confidential and non-judgmental services covering all aspects of reproductive and sexual health. Our team is here to provide information, testing, and support.
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-1 mb-2">
                <li>Family planning & contraception (including emergency contraception)</li>
                <li>STI/STD testing and treatment</li>
                <li>Pap smears and cervical cancer screening</li>
                <li>Pregnancy testing and referral</li>
                <li>Pre-exposure Prophylaxis (PrEP) information and access</li>
            </ul>
            <div class="mt-2">
                <h4 class="font-semibold text-blue-600 mb-1">Extra Resources:</h4>
                <a href="https://www.safesex.co.za/" target="_blank" class="text-blue-500 hover:underline flex items-center">
                    <i class="fas fa-external-link-alt mr-2 text-sm"></i> Safe Sex Information (External Site)
                </a>
            </div>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-blue-700 flex flex-col">
            <div class="flex items-center mb-4">
                <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 mr-3">
                    <i class="fas fa-ambulance text-2xl text-blue-500"></i>
                </span>
                <h3 class="text-xl font-bold text-blue-800">Emergency Medical Services</h3>
            </div>
            <p class="text-gray-700 mb-3 flex-1">
                Immediate first aid and acute care for medical emergencies occurring on campus. Our clinic is equipped to stabilize patients and facilitate transfer to higher-level medical facilities when necessary.
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-1 mb-2">
                <li>First aid for injuries & sudden illnesses</li>
                <li>Stabilization of acute conditions</li>
                <li>Emergency referrals & transport coordination</li>
            </ul>
            <div class="mt-2">
                <h4 class="font-semibold text-blue-600 mb-1">Extra Resources:</h4>
                <a href="https://vut.ac.za/student-support-services-campus-clinic/" class="text-blue-500 hover:underline flex items-center">
                    <i class="fas fa-question-circle mr-2 text-sm"></i> What to Do in an Emergency at VUT
                </a>
            </div>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-blue-700 flex flex-col">
            <div class="flex items-center mb-4">
                <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 mr-3">
                    <i class="fas fa-ribbon text-2xl text-blue-500"></i>
                </span>
                <h3 class="text-xl font-bold text-blue-800">HIV/ARV Program</h3>
            </div>
            <p class="text-gray-700 mb-3 flex-1">
                A comprehensive and confidential program offering voluntary HIV counseling and testing (HCT), as well as ongoing management and support for students on Antiretroviral (ARV) therapy.
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-1 mb-2">
                <li>Confidential HIV testing & counseling</li>
                <li>ARV initiation & adherence support</li>
                <li>Regular viral load monitoring</li>
                <li>Nutritional and psycho-social support</li>
            </ul>
            <div class="mt-2">
                <h4 class="font-semibold text-blue-600 mb-1">Extra Resources:</h4>
                <a href="https://www.avert.org/hiv-aids/south-africa" target="_blank" class="text-blue-500 hover:underline flex items-center">
                    <i class="fas fa-external-link-alt mr-2 text-sm"></i> General HIV/AIDS Information (External Site)
                </a>
            </div>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-blue-700 flex flex-col">
            <div class="flex items-center mb-4">
                <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 mr-3">
                    <i class="fas fa-comments text-2xl text-blue-500"></i>
                </span>
                <h3 class="text-xl font-bold text-blue-800">Student Counselling Support</h3>
            </div>
            <p class="text-gray-700 mb-3 flex-1">
                Access to professional and confidential psychological counseling services to support your mental and emotional well-being. We offer a safe space to discuss academic stress, anxiety, depression, personal challenges, and more.
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-1 mb-2">
                <li>Individual therapy sessions</li>
                <li>Stress management techniques</li>
                <li>Grief and trauma counseling</li>
                <li>Referrals to specialized mental health services</li>
            </ul>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-blue-700 flex flex-col">
            <div class="flex items-center mb-4">
                <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 mr-3">
                    <i class="fas fa-shield-alt text-2xl text-blue-500"></i>
                </span>
                <h3 class="text-xl font-bold text-blue-800">Health Screenings & Vaccinations</h3>
            </div>
            <p class="text-gray-700 mb-3 flex-1">
                Preventative health services to keep you healthy and protect the campus community. This includes various health screenings and recommended vaccinations.
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-1 mb-2">
                <li>Blood pressure and glucose checks</li>
                <li>Cholesterol screenings</li>
                <li>Flu vaccinations</li>
                <li>Measles, Mumps, Rubella (MMR) and Tetanus updates (as per university policy)</li>
            </ul>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-blue-700 flex flex-col">
            <div class="flex items-center mb-4">
                <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 mr-3">
                    <i class="fas fa-bullhorn text-2xl text-blue-500"></i>
                </span>
                <h3 class="text-xl font-bold text-blue-800">Health Education & Promotion</h3>
            </div>
            <p class="text-gray-700 mb-3 flex-1">
                Empowering students with knowledge to make informed health decisions. We offer workshops, seminars, and resources on various health topics.
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-1 mb-2">
                <li>Nutrition and healthy eating</li>
                <li>Stress management workshops</li>
                <li>Substance abuse prevention</li>
                <li>Hygiene practices</li>
            </ul>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-blue-700 flex flex-col">
            <div class="flex items-center mb-4">
                <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 mr-3">
                    <i class="fas fa-leaf text-2xl text-blue-500"></i>
                </span>
                <h3 class="text-xl font-bold text-blue-800">Wellness Programs</h3>
            </div>
            <p class="text-gray-700 mb-3 flex-1">
                Initiatives designed to promote holistic well-being beyond illness treatment, focusing on physical, mental, and social health.
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-1 mb-2">
                <li>Fitness challenges & awareness campaigns</li>
                <li>Mindfulness and relaxation techniques</li>
                <li>Peer health education</li>
            </ul>
        </div>
    </div>

    <div class="bg-gradient-to-r from-blue-800 to-blue-600 text-white p-10 rounded-2xl shadow-2xl mt-10">
        <h3 class="text-3xl md:text-4xl font-extrabold mb-4 text-center drop-shadow">Stay Informed & Engaged!</h3>
        <p class="text-lg md:text-xl text-center mb-8">
            Explore our resources for valuable health information and upcoming events.
        </p>
        <div class="flex flex-col md:flex-row justify-center items-center gap-6">
            <a href="https://www.afro.who.int/" class="bg-yellow-400 text-blue-900 font-bold py-3 px-8 rounded-full hover:bg-yellow-500 transition duration-300 shadow-lg flex items-center text-lg">
                <i class="fas fa-newspaper mr-3"></i> Health Articles
            </a>
            <a href="https://vut.ac.za/events/" class="bg-green-500 text-white font-bold py-3 px-8 rounded-full hover:bg-green-600 transition duration-300 shadow-lg flex items-center text-lg">
                <i class="fas fa-calendar-alt mr-3"></i> Upcoming Events
            </a>
            <a href="https://vut.ac.za/student-support-services-campus-clinic/" class="bg-purple-600 text-white font-bold py-3 px-8 rounded-full hover:bg-purple-700 transition duration-300 shadow-lg flex items-center text-lg">
                <i class="fas fa-info-circle mr-3"></i> Student Health Info
            </a>
        </div>
    </div>
</div>
@endsection