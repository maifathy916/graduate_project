<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class treatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('treatments')->insert([
        "Symptoms"=>'Severe pain',
        "Symptomsar"=>'هل تشعر بألم حاد',
        "analgesics"=> 'catayad 50g',
        "antibiotics"=>'null',
        "SymId"=>1
      ]);

      DB::table('treatments')->insert([
          "Symptoms"=>'migraine pain and Throbbing pain Necrosis',
          "Symptomsar"=>'هل تشعر بصداع نصفي مصاحبه الم عميق في السنة',
          "analgesics"=> 'catayad 50g',
          "antibiotics"=>'null',
          "SymId"=>1
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'Pain during eating',
          "Symptomsar"=>'هل تشعر بألم اثناء تناول الطعام',
          "analgesics"=> 'EPTOL 200 MG',
          "antibiotics"=>'null',
          "SymId"=>1
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'Evoke pain simultaneously',
          "Symptomsar"=>'هل تشعر بألم مستمر طول الوقت لا يتوقف',
          "analgesics"=> 'paracetamol',
          "antibiotics"=>'null',
          "SymId"=>1
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'Pain and sensitivity in the jaw around the tooth',
          "Symptomsar"=>'هل تشعر بألم وحساسية في الفك حول السنة',
          "analgesics"=> 'Ibuprofen 600g',
          "antibiotics"=>'null',
          "SymId"=>1
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'Swelling of the jaw or face' ,
          "Symptomsar"=>'هل يوجد تورم في الفك أو الوجة',
          "analgesics"=>'AVENTYL 25mg',
          "antibiotics"=>'null',
          "SymId"=>1
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'Prolonged pain or sensitivity after exposure to heat' ,
          "Symptomsar"=>'هل تشعر بألم لفترة طويلة وحساسية عند التعرض لحرارة',
          "analgesics"=>'NORTRILEN 25mg',
          "antibiotics"=>'null',
          "SymId"=>1
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'sensitivity to hot,cold food and sweet food' ,
          "Symptomsar"=>'هل تشعر بألم عند شرب ماء بارد أو ساخن أو عند تناول الطعام ',
          "analgesics"=>'Pamelor',
          "antibiotics"=>'null',
          "SymId"=>1
        ]);

        DB::table('treatments')->insert([
          
         "Symptoms"=>'Gum swelling and the gums may increase from slight redness to severe pain' ,
         "Symptomsar"=>'هل هناك تورم في اللثة وهل كان هناك احمرار خفيف تحول الي ألم شديد',
         "analgesics"=>'Pamelor',
          "antibiotics"=>'amrizole 500g',
          "SymId"=>2
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'Mouth odor persists all the time' ,
          "Symptomsar"=>'هل هناك رائحة بالفم مستمرة طول الوقت',
          "analgesics"=>'null',
          "antibiotics"=>'flaqyle 500g(an adobe)',
          "SymId"=>2
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'Pain when chewing food' ,
          "Symptomsar"=>'هل هناك ألم اثناء مضغ الطعام',
          "analgesics"=>'null',
          "antibiotics"=>'flaqyle 500g(an adobe)',
          "SymId"=>2
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'lancinating pain and severe calculus' ,
          "Symptomsar"=>'هل تشعر بألم شديد مستمر طول الوقت لا يزول',
          "analgesics"=>'paracetamol',
          "antibiotics"=>'Tetracycline',
          "SymId"=>2
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'spontaneous bleeding' ,
          "Symptomsar"=>'هل هناك نزيف  في اللثة',
          "analgesics"=>'null',
          "antibiotics"=>'Metronidazole',
          "SymId"=>2
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'pain when the gums are touched' ,
          "Symptomsar"=>'هل يوجد ألم عند لمس اللثة',
          "analgesics"=>'null',
          "antibiotics"=>'FORTEPEN 0.4GM',
          "SymId"=>2
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'pus between the teeth and gum' ,
          "Symptomsar"=>'هل يوجد صديد بين الأسنان واللثة',
          "analgesics"=>'null',
          "antibiotics"=>'Clindamycin 300 g side effect diarrhea',
          "SymId"=>2
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'Redness and bleeding from brush use' ,
          "Symptomsar"=>'هل يوجد أحمرار ودم عند استخدام فرشاة الأسنان',
          "analgesics"=>'null',
          "antibiotics"=>'Oral rinse with antibiotics containing chlorhexidine for oral cleansing',
          "SymId"=>2
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'Migraine during  brush use ' ,
          "Symptomsar"=>'هل تشعرين بالم عند استخدام فرشاة الاسنان',
          "analgesics"=>'paracetamol',
          "antibiotics"=>'null',
          "SymId"=>3
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'Etching sensation' ,
          "Symptomsar"=>'هل هناك احساس بالم مثل الحفر  مستمر لا يزول ابدأ',
          "analgesics"=>'null',
          "antibiotics"=>'Clindamycin 300 g side effect diarrhea',
          "SymId"=>3
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'brown or black spots appearing on your teeth' ,
          "Symptomsar"=>'هل يظهر لون بني أو أسود علي السنة',
          "analgesics"=>'NORTRILEN 25mg',
          "antibiotics"=>'Oral rinse with antibiotics containing chlorhexidine for oral cleansing',
          "SymId"=>3
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'pain with cold water or eating' ,
          "Symptomsar"=>'هل تشعر بألم اثناء الاكل أو شرب الماء ',
          "analgesics"=>'catayad 500g',
          "antibiotics"=>'null',
          "SymId"=>3
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'pain with cold water or eating' ,
          "Symptomsar"=>'هل تشعر بألم مع شرب الماء أو الاكل ',
          "analgesics"=>'null',
          "antibiotics"=>'Tetracycline',
          "SymId"=>3
        ]);
        DB::table('treatments')->insert([
          "Symptoms"=>'either continuous pain keeping you awake' ,
          "Symptomsar"=>'هل تشعر بألم شديد مستمر يبقيك يقظ طول الليل',
          "analgesics"=>'null',
          "antibiotics"=>'FORTEPEN 0.4GM',
          "SymId"=>3
        ]);
    }


//INSERT INTO treatments (TmId, SymId,Symptoms, analgesics,antibiotics) VALUES
//(1, 1,'Severe pain', 'catayad 50g', 'null'),
//(2, 1,'migraine pain and Throbbing pain Necrosis', 'catayad 500g', 'null'),
//(3, 1,'Pain during eating' ,'EPTOL 200 MG', 'null'),
//(4, 1,'Evoke pain simultaneously' ,'paracetamol', 'null'),
//(5, 1,'Pain and sensitivity in the jaw around the tooth' ,'Ibuprofen 600g', 'null'),
//(6, 1,'Swelling of the jaw or face' ,'AVENTYL 25mg', 'null'),
//(7, 1,'Prolonged pain or sensitivity after exposure to heat' ,'NORTRILEN 25mg', 'null'),
//(8, 1,'sensitivity to hot,cold food and sweet food' ,'Pamelor', 'null'),
//(9,  2,'Gum swelling and the gums may increase from slight redness to severe pain', 'Pamelor', 'amrizole 500g'),
//(10, 2,'Mouthful smell', 'null', 'flaqyle 500g(an adobe)'),
//(11, 2,'Pain when chewing food','null', 'fluox 500g(aerobe)'),
//(12, 2,'lancinating pain and severe calculus' ,'paracetamol', 'Tetracycline'),
//(13, 2,'spontaneous bleeding' ,'null', 'Metronidazole'),
//(14, 2,'pain when the gums are touched' ,'null', 'FORTEPEN 0.4GM'),
//(15, 2,'pus between the teeth and gum' ,'null', 'Clindamycin 300 g side effect diarrhea'),
//(16, 2,'Redness and bleeding from brush use', 'null', 'Oral rinse with antibiotics containing chlorhexidine for oral cleansing'),
//(17, 3,'Migraine', 'paracetamol', 'null'),
// (18, 3,'Etching sensation' ,'null', 'Clindamycin 300 g side effect diarrhea'),
//(19, 3,'brown or black spots appearing on your teeth' ,'NORTRILEN 25mg', 'Oral rinse with antibiotics containing chlorhexidine for oral cleansing'),
//(20, 3,'pain with cold water or eating' ,'catayad 500g', 'null'),
//(21, 3,'pulp exposure' ,'null', 'Tetracycline'),
//(22, 3,'either continuous pain keeping you awake','null', 'FORTEPEN 0.4GM');
}
