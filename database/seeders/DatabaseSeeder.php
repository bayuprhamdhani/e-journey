<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);

        $this->call(CountrySeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(SubdistrictFromCsvSeeder::class);
        $this->call(TypeSchoolSeeder::class);
                    $this->call(SchoolSeeder::class);
        $this->call(ParentTypeSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(MajorSeeder::class);
        $this->call(InstitutionSeeder::class);
        $this->call(ClassSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(PromotorSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(CommitteeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SemesterSeeder::class);
        $this->call(MonthSeeder::class);
        $this->call(WeekSeeder::class);
        $this->call(TaskSeeder::class);
        $this->call(ScoreTaskSeeder::class);
        $this->call(FinishedTaskSeeder::class);
        $this->call(StatusAdviceSeeder::class);
        $this->call(AdviceSeeder::class);
        $this->call(TotalMarkSeeder::class);
        $this->call(GeneralLessonSeeder::class);
        $this->call(MajorLessonSeeder::class);
        $this->call(GeneralMarkSeeder::class);
        $this->call(MajorMarkSeeder::class);
        $this->call(ScoreTrophySeeder::class);
        $this->call(TypeTrophySeeder::class);
        $this->call(StatusTrophySeeder::class);
        $this->call(MajorTrophySeeder::class);
        $this->call(GeneralTrophySeeder::class);
        $this->call(StatusFinishSeeder::class);
        $this->call(FinishedGeneralTrophySeeder::class);
        $this->call(PinnedGeneralTrophySeeder::class);
        $this->call(FinishedMajorTrophySeeder::class);
        $this->call(PinnedMajorTrophySeeder::class);
        $this->call(IntelligenceTypeSeeder::class);
        $this->call(OptionAnswerSeeder::class);
        $this->call(QuestionDreamSeeder::class);
        $this->call(AnswerDreamSeeder::class);
        $this->call(ReccomendMajorSeeder::class);
    }
}
