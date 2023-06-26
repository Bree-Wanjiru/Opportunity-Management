<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\User;
use App\Models\Opportunity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        //user to own the opportunity
        $user = User::factory()->create([
            'name' => 'Admin',
            'email'=>'useradmin@gmail.com',
            'password' => '12345678'
        ]);



        //opportunities to be displayed
        Opportunity::create([
            'user_id' => $user->id,
            'title' => 'Principal Architect, Gaming, Google Cloud',
            'tags' => 'gaming, cloud computing, cloud market',
            'company' => 'Google',
            'location' => 'Mumbai, Maharashtra, India',
            'email' => 'test2@gmail.com',
            'website' => 'https://careers.google.com/jobs/results/',
            'amount' => '600,000',
            'deadline' => '24th October 2023',
            'posted'=>'21st June 2023',
            'description' => 'As a Principal Architect, you will facilitate the conversation and direct the execution of the business team by combining both technical vision and business insight. You will partner with Value Engineering in order to articulate the true total value of each technical solution and the overall business partnership with Google Cloud.
             Google Cloud accelerates organizations’ ability to digitally transform their business with the best infrastructure, platform, industry solutions and expertise. We deliver enterprise-grade solutions that leverage Google’s cutting-edge technology – all on the cleanest cloud in the industry. Customers in more than 200 countries and territories turn to Google Cloud as their trusted partner to enable growth and solve their most critical business problems. ',
             'qualifications'=>'
             Minimum qualifications:
                -Bachelors degree in Computer Science or equivalent practical experience.
                -10 years of experience as an enterprise architect in either a gaming, cloud computing company, or in a customer-facing role.
                -Experience in gaming, cloud computing, and cloud market.
                -Experience promoting solutions to businesses.
                
                Preferred qualifications:
                -Experience with structured Enterprise Architecture practices, hybrid cloud deployments, and on-premise-to-cloud migration deployments/roadmaps.
                -Experience in enterprise technology buying, evaluation process, building, architecting, designing and implementing global cloud-based systems.
                -Experience in network infrastructure, security, and application development.
                -Knowledge of technology solutions and ability to learn, understand, and work quickly with new emerging technologies, methodologies, and solutions in the Cloud/IT technology space.
                -Understanding of computing solutions.
                -Ability to deliver results, work cross-functionally, engage/influence audiences, and identify growth opportunities.',
                'dropdown'=>'Discovery'

        ]);

        Opportunity::create([
            'user_id' => $user->id,
            'title' => 'Data Science',
            'tags' => ' Statistics, SQL,R',
            'company' => 'Safaricom',
            'location' => 'Westlands,Nairobi',
            'email' => 'test1@gmail.com',
            'website' => 'https://www.safaricom.co.ke/careers/',
            'amount' => '500,000',
            'deadline' => '24th August 2023',
            'posted'=>'20th June 2023',
            'description' => '
            -Work closely with General Manager (GM) and other cross-functional team members to identify opportunities and address users in the region.
            -Provide quantitative support, market understanding and a strategic perspective to our partners throughout the organization.
            -Work with large data sets and solve non-routine investigative issues.
            -Make compelling business recommendations with effective presentations of findings at multiple levels of stakeholders. ',
            'qualifications'=>'
            Minimum qualifications:
                -Bachelors degree in Statistics, Computer Science, Mathematics, or equivalent practical experience.
                -Experience in analysis or operations management support, while presenting to executives (e.g., consulting, management reporting, Six Sigma certification).
                
                Preferred qualifications:
                -Masters degree in Statistics, Mathematics, Data Science, Engineering, Physics, Economics, or a related quantitative field.
                -Experience working with data visualization tools or libraries (e.g. Tableau) to deliver results and insights.
                -Experience analyzing large quantities of data to derive insights and create new metrics with data extraction and manipulation skills (e.g. SQL).
                -Knowledge of statistical tools/software packages (e.g., Python, R).
                -Ability to solve complex issues of users and developers, complete projects separately and work with cross-functional teams in a dynamic environment.
                -Excellent problem-solving and critical thinking skills.',
                'dropdown'=>'Discovery'

        ]);

        Opportunity::create([
            'user_id' => $user->id,
            'title' => 'User Interface (UI) Content Director',
            'tags' => 'UX Design, Digital Communications',
            'company' => 'Google',
            'location' => 'Redmond, Washington',
            'email' => 'test1@gmail.com',
            'website' => 'https://careers.google.com/jobs/results/',
            'amount' => '500,000',
            'deadline' => '15th August 2023',
            'posted'=>'21st June 2023',
            'description' => '
            -Lead the UI team with energy and clarity to continue building a performing creative organization.
            -Exercise the company Model/Coach/Care management approach to build a team.
            -Partner with art directors to refine and document the look and feel of our games.
            -Provide feedback to artists and user experience designers to ensure visual excellence across our games from concept through implementation.
            -Understand our UI pipeline and provide feedback to improve development processes.
            -Work closely with technical and production peers to create a long-term UI development strategy.
            -Stay up-to-date with industry trends, best practices, and emerging technologies to continually improve the user experience.',
            'qualifications'=>'
            Required/Minimum Qualifications

            -Bachelors Degree in Arts, Digital Communications, UX Design, Human Computer Interaction, Communications, English, Journalism, or related field AND 6+ years experience working in product or service design, copywriting, technical writing, writing (e.g. for marketing, advertising, e-commerce), brand design, or brand marketing
            -Masters Degree in Arts, Digital Communications, UX Design, Human Computer Interaction, Communications, English, Journalism, or related field AND 4+ years experience working in product or service design, copywriting, technical writing, writing (e.g. for marketing, advertising, e-commerce), brand design, or brand marketing
             OR equivalent experience.
            -3+ years people management experience.
            -3+ years of experience cross collaborating with teams across functions (engineering, artists, designers, producers)
 

             Additional or Preferred Qualifications

            -Bachelors Degree in Industrial Design, Product Design, Visual Design, Human Computer Interaction, or related field AND 12+ years experience working in product or service design
             OR Masters Degree in Industrial Design, Product Design, Visual Design, Human Computer Interaction, or related field AND 8+ years experience working in product or service design
             OR equivalent experience.
            -5+ years people management experience.
            -Portfolio showcasing your design and art skills, including your process and the results of your work.
            -Ability to help teams define visual experiences and develop direction based on research, strategy, and player insights, and effectively communicate that vision.',
            'dropdown'=>'Proposal shared'

        ]);

        Opportunity::create([
            'user_id' => $user->id,
            'title' => 'Software Engineer',
            'tags' => 'Data analysis, JavaScript/TypeScript',
            'company' => 'Safaricom',
            'location' => 'San Jose, San José, Costa Rica',
            'email' => 'test1@gmail.com',
            'website' => 'https://www.safaricom.co.ke/careers/',
            'amount' => '500,000',
            'deadline' => '21st July 2023',
            'posted'=>'19th June 2023',
            'description' => 'Responsibilities
            • Full stack software development – UX and business logic for a broad set of features
            • Design, development, and testing of features
            • Data analysis and experimentation to make recommendations for improvement in the product',
            'qualifications'=>'Required Qualifications:
                • Bachelor’s Degree in Computer Science, Math, or Engineering
                • At least 2+ years of experience in Software Design, Development, Programming or Engineering role
                 
                Preferred Qualifications:
                • Master/Bachelor Degree in Computer Science or related technical field AND 4+ years technical engineering experience with coding in languages including, but not limited to, C#, Java, or JavaScript/TypeScript
                • Solid Object-Oriented Design and Programming skills
                • Experience in web and RESTful services
                • Strong problem solving skills, great teamwork, and passion to delight customers',
                'dropdown'=>'Negotiations'

        ]);

        Opportunity::create([
            'user_id' => $user->id,
            'title' => 'Senior Technical Program Manager',
            'tags' => 'data engineering, data science, product development',
            'company' => 'Safaricom',
            'location' => 'Westlands,Nairobi',
            'email' => 'test1@gmail.com',
            'website' => 'https://www.safaricom.co.ke/careers/',
            'amount' => '500,000',
            'deadline' => '22nd August 2023',
            'posted'=>'25th June 2023',
            'description' => 'To succeed in this role, the ideal candidate should have:

            -A dedication to customers and their end to end experiences.
            -A growth mindset and be an inclusive, compassionate co-worker.
            -A bias for action and a proactive approach to improving customer experience.
            -Proficient technical and analytical skills to be able to identify opportunities across a complex platform with varied customer needs.
            -Excellent cross-group collaboration skills that provide clarity and generate energy for the solutions to those opportunities.
            -You should also have a track record of delivery in a services environment.
            -Build partnerships and work across organizational boundaries to accomplish shared goals
            -Work with customers and partner teams to design architecture aimed at solving complex customer needs
            -Define key performance indicators (KPIs) to measure direct customer experiences and establish & execute on a roadmap for achieving industry leading benchmarks in those areas
            -Establish priorities across divisional boundaries, track improvement across customer-centric KPIs, and report on progress against those KPIs at an executive level
            -Develops systems and processes that are better tomorrow than today, with a focus on reducing redundant work and empowering teams to take productive action ',

            'qualifications'=>'
            -Bachelors Degree AND 4+ years experience in engineering, product/technical program management, data engineering, data science, or product development
            OR equivalent experience.
            -2+ years experience managing cross-functional and/or cross-team projects.
            
            Other Requirements: 
            -Ability to meet Microsoft, customer and/or government security screening requirements are required for this role. These requirements include, but are not limited to the following specialized security screenings: Microsoft Cloud Background Check: This position will be required to pass the Microsoft Cloud Background Check upon hire/transfer and every two years thereafter.
            
            Preferred Qualifications:
            -Bachelors Degree AND 8+ years experience in engineering, product/technical program management, data analysis, or product development
            OR equivalent experience.
            -6+ years experience managing cross-functional and/or cross-team projects.
            -1+ year(s) experience reading and/or writing code (e.g., sample documentation, product demos).',
            'dropdown'=>'Negotiations'

        ]);

        Opportunity::create([
            'user_id' => $user->id,
            'title' => 'Network Security Opportunity',
            'tags' => 'network, cybersecurity',
            'company' => 'Safaricom',
            'location' => 'Westlands,Nairobi',
            'email' => 'test1@gmail.com',
            'website' => 'https://www.safaricom.co.ke/careers/',
            'amount' => '500,000',
            'deadline'=>'29th July 2023',
            'posted'=>'23rd june 2023',
            'description' => 'A network security engineer is responsible for every aspect of data safety in a network, ensuring there are minimum vulnerabilities by adopting and integrating the latest technology to prevent malicious attacks. A network security engineer job description often includes:

                Making sure system backups are running in case of a security attack
                
                Implementing network security blueprints prepared by security architects
                
                Managing information and data access 
                
                Maintaining and updating firewalls and testing the organizations network and systems ',
                'qualifications' =>' Some of the interpersonal and soft skills you’ll want to acquire include:

                    -Attention to detail, which is necessary for evaluating problems and equipment
                    -Analytic skills for identifying inconspicuous concerns and threats
                    -Problem-solving skills that allow you to act quickly but thoroughly
                    -Communication skills for explaining issues and directing other employees

                    On the technical front, some of the skills you’ll want to learn and master include:

                    -The ability to identify cybersecurity threats and implement the best course of action to mitigate them
                    -Familiarity with the latest technology and concepts in cybersecurity, along with information on the latest malware and schemes
                    -Confidence in implementing and administering technical solutions, such as firewalls, routers, VPNs, and servers
                    -Knowledge of cybersecurity laws and what must be done to comply with those regulations, especially as they change and evolve',
                    'dropdown'=>'Proposal shared'

        ]);

        Opportunity::create([
            'user_id' => $user->id,
            'title' => 'Director of Mechanical Engineering',
            'tags' => 'mechanical engineering, manufacturing, product development',
            'company' => 'Opibus',
            'location' => 'Westlands,Nairobi',
            'email' => 'test1@gmail.com',
            'website' => 'https://careerassociated.com/job/opibus-roam-director-of-mechanical-engineering',
            'amount' => '500,000',
            'deadline'=>'29th July 2023',
            'posted'=>'23rd May 2023',
            'description' => '
            Key Duties and responsibilities:
             • Develop the team and organization.
             • Develop and advise on the strategy for development of technology.
             • Lead and manage a team of mechanical engineers in the development of new components , ensuring projects are completed on-time, on-budget, and to specifications.
             • Provide technical guidance and direction to the mechanical engineering team, ensuring the development of products that are safe, reliable, and cost-effective.
             • Collaborate with cross-functional teams including electrical engineering, battery engineering, software engineering, industrial design, and manufacturing to ensure the successful integration of mechanical components into the final product.
             • Develop and maintain engineering standards and best practices to ensure consistent quality across all products.
             • Continuously improve the design process to increase efficiency, reduce costs, and improve quality.
             • Stay up-to-date with the latest developments in mechanical engineering, manufacturing technology, and apply this knowledge to improve the company’s products and processes.
             • Provide regular progress reports to the executive team and make recommendations for improvements and changes as needed. ',
            'qualifications' =>'
                
            • Bachelor’s degree in Mechanical Engineering or a related field.
            • At least 10 years of experience in mechanical/hardware engineering, with a strong focus on product design and hands-on working experience. (pref. Automotive)
            • Strong technical knowledge of mechanical engineering principles and practices, as well as experience with CAD / FEA / CAM softwares and development cycles and other design tools/processes.
            • Proven track record of leading and managing engineering teams, including setting goals, providing guidance and feedback, and measuring performance.
            • Excellent communication skills, both verbal and written, with the ability to effectively communicate complex technical concepts to non-technical stakeholders.
            • Strong problem-solving skills, with the ability to identify and resolve complex technical issues.
            • Experience managing budgets and resources, with a focus on efficiency and cost-effectiveness.
            • Ability to work collaboratively with cross-functional teams and manage multiple projects simultaneously.
            • Demonstrated ability to drive continuous improvement and innovation within the engineering department.
            • Scale-up experience of product with cost cutting focus and DFM',
            'dropdown'=>'Discovery'

        ]);
    }
}
