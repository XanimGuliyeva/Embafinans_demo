<?php

namespace App\Http\Controllers\Admin;

use App\About\About;
use App\Contact\Contact;
use App\ContactInfo\ContactInfo;
use App\Finance\Finance;
use App\Http\Requests\Categories\EditCategoryRequest;
use App\Http\Requests\Contact\ContactRequest;
use App\Http\Requests\ContactInfo\ContactInfoRequest;
use App\Http\Requests\Finance\FinanceRequest;
use App\Http\Requests\MissionRequest\MissionRequest;
use App\Http\Requests\NewsRequest\NewsRequest;
use App\Http\Requests\Offers\EditOfferCategoryRequest;
use App\Http\Requests\Offers\EditOffersRequest;
use App\Http\Requests\Offers\OfferCategoryRequest;
use App\Http\Requests\Offers\OffersRequest;
use App\Http\Requests\Partners\EditPartnersRequest;
use App\Http\Requests\Partners\PartnerRequest;
use App\Http\Requests\Products\EditProduct2Request;
use App\Http\Requests\Products\EditProductRequest;
use App\Http\Requests\Products\Product2Request;
use App\Http\Requests\Products\ProductRequest;
use App\Http\Requests\Sup_Cat\Sup_CatRequest;
use App\Http\Requests\Par_Cat\Par_CatRequest;
use App\Http\Requests\Supporters\EditSupportersRequest;
use App\Http\Requests\Supporters\SupporterRequest;
use App\Menus\Menus;
use App\Mission\Mission;
use App\Career\Career;
use App\Categories\Categories;
use App\Http\Requests\Career\CareerRequest;
use App\Http\Requests\Categories\CategoryRequest;
use App\Http\Requests\Leader\EditLeaderRequest;
use App\Http\Requests\Leader\LeaderRequest;
use App\Http\Requests\Pos_Cat\Pos_CatRequest;
use App\Leaders\Leaders;
use App\News\News;
use App\Http\Controllers\Controller;
use App\Http\Requests\About\AboutRequest;
use App\Http\Requests\Report\EditReportRequest;
use App\Http\Requests\Report\ReportRequest;
use App\Offers\OfferCat;
use App\Offers\Offers;
use App\Partners\Partner_cat;
use App\Partners\Partners;
use App\Position_Categories\Position_Categories;
use App\Products\Products;
use App\Report\Report;
use App\Supporter_cat\Supporter_cat;
use App\Supporters\Supporters;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function about(AboutRequest $request)
    {
        if (About::find(1)) {
            $about = About::find(1);
        }
        else {
            $about = new About();
        }
        $about->content = $request->mycontent;
        $about->employee = $request->employee;
        $about->credit = $request->credit;
        $about->portfolio = $request->portfolio;
        $about->partner = $request->partner;
        $about->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function mission(MissionRequest $request)
    {
        if (Mission::find(1)) {
            $mission = Mission::find(1);
        }
        else {
            $mission = new Mission();
        }
        $mission->content = $request->mycontent;
        $mission->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_news(NewsRequest $request)
    {
        $news = new News();
        $news->content = $request->mycontent;
        $news->header = $request->header;
        $news->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_news(NewsRequest $request)
    {
        $id = $request->id;
        $news = News::find($id);
        $news->content = $request->mycontent;
        $news->header = $request->header;
        $news->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_report(ReportRequest $request)
    {
        $add_report = new Report();
        $add_report->name = $request->name;
        $add_report->year = $request->year;
        if ($request->hasfile('report')){
            $file = $request->file('report');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/reports/', $filename);
            $add_report->report = $filename;
        }
        $add_report->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'id' => $add_report->id,
            'report' => $filename
        ]);
    }

    public function edit_report(EditReportRequest $request)
    {
        $id = $request->id;
        $edit_report = Report::find($id);
        $edit_report->name = $request->new_name;
        $edit_report->year = $request->new_year;
        $filename = 1;
        if ($request->hasfile('new_report')){
            $file_path = app_path("../public/reports/{$edit_report->report}");
            unlink($file_path);
            $file = $request->file('new_report');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/reports/', $filename);
            $edit_report->report = $filename;
        }
        $edit_report->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'report' => $filename

        ]);
    }

    public function delete_news(Request $request)
    {
        $id = $request->id;
        $news = News::find($id);
        $news->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function delete_report(Request $request)
    {
        $id = $request->id;
        $delete_report = Report::find($id);
        $file_path = app_path("../public/reports/{$delete_report->report}");
        unlink($file_path);
        $delete_report->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_category(Pos_CatRequest $request)
    {
        $add_category = new Position_Categories();
        $add_category->category = $request->category;
        $add_category->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'id' => $add_category->id
        ]);
    }

    public function delete_category(Request $request)
    {
        $id = $request->id;
        $delete_category = Position_Categories::find($id);
        $delete_category->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_category(Pos_CatRequest $request)
    {
        $id = $request->id;
        $edit_category = Position_Categories::find($id);
        $edit_category->category = $request->category;
        $edit_category->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_leader(LeaderRequest $request)
    {
        $add_leader = new Leaders();
        $add_leader->full_name = $request->full_name;
        $add_leader->position = $request->position;
        $add_leader->email_link = $request->email_link;
        $add_leader->linkedin_link = $request->linkedin_link;
        $add_leader->category = $request->category;
        if ($request->hasfile('profile')){
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/profile_pics/', $filename);
            $add_leader->profile = $filename;
        }
        $add_leader->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'id' => $add_leader->id,
            'profile' => $filename
        ]);
    }

    public function delete_leader(Request $request)
    {
        $id = $request->id;
        $delete_leader = Leaders::find($id);
        $file_path = app_path("../public/profile_pics/{$delete_leader->profile}");
        unlink($file_path);
        $delete_leader->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_leader(EditLeaderRequest $request)
    {
        $id = $request->id;
        $edit_leader = Leaders::find($id);
        $edit_leader->full_name = $request->new_full_name;
        $edit_leader->position = $request->new_position;
        $edit_leader->email_link = $request->new_email_link;
        $edit_leader->linkedin_link = $request->new_linkedin_link;
        $edit_leader->category = $request->new_category;
        $filename = 1;
        if ($request->hasfile('new_profile')){
            $file_path = app_path("../public/profile_pics/{$edit_leader->profile}");
            unlink($file_path);
            $file = $request->file('new_profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/profile_pics/', $filename);
            $edit_leader->profile = $filename;
        }
        $edit_leader->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'profile' => $filename
        ]);
    }

    public function add_career(CareerRequest $request)
    {
        $add_career = new Career();
        $add_career->content = $request->mycontent;
        $add_career->header = $request->header;
        $add_career->city = $request->city;
        $add_career->deadline = $request->deadline;
        $add_career->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_career(CareerRequest $request)
    {
        $id = $request->id;
        $edit_career = Career::find($id);
        $edit_career->content = $request->mycontent;
        $edit_career->header = $request->header;
        $edit_career->city = $request->city;
        $edit_career->deadline = $request->deadline;
        $edit_career->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function delete_career(Request $request)
    {
        $id = $request->id;
        $delete_career = Career::find($id);
        $delete_career->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_main_category(CategoryRequest $request)
    {
        $add_category = new Categories();
        $add_category->name = $request->category;
        $add_category->about = $request->about;
        $add_category->percent = $request->percent;
        $add_category->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'id' => $add_category->id
        ]);
    }

    public function delete_main_category(Request $request)
    {
        $id = $request->id;
        $delete_category = Categories::find($id);
        $delete_category->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_main_category(EditCategoryRequest $request)
    {
        $id = $request->id;
        $edit_category = Categories::find($id);
        $edit_category->name = $request->new_category;
        $edit_category->about = $request->new_about;
        $edit_category->percent = $request->new_percent;
        $edit_category->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_product(ProductRequest $request)
    {
        $add_product = new Products();
        $add_product->name = $request->name;
        $add_product->about = $request->about;
        $add_product->value = $request->value;
        $add_product->choice = $request->choice;
        $add_product->term = $request->term;
        $add_product->min_amount = $request->min_amount;
        $add_product->max_amount = $request->max_amount;
        $add_product->monthly_payment = $request->monthly_payment;
        $add_product->min_term = $request->min_term;
        $add_product->max_term = $request->max_term;
        $add_product->annual_rate = $request->annual_rate;
        $add_product->FIFD = $request->FIFD;
        $add_product->commission = $request->commission;
        $add_product->payment_form = $request->payment_form;
        $add_product->financing = $request->financing;
        $add_product->age = $request->age;
        $add_product->bail = $request->bail;
        $add_product->documents = $request->documents;
        $add_product->informations = $request->informations;
        $add_product->category = $request->category;
        if ($request->hasfile('choice_img')){
            $file = $request->file('choice_img');
            $extension = $file->getClientOriginalExtension();
            $filename = (time()+1).'.'.$extension;
            $file->move('../public/images/', $filename);
            $add_product->choice_img = $filename;
        }
        if ($request->hasfile('main_image')){
            $file = $request->file('main_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $add_product->image = $filename;
        }
        $add_product->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_product(EditProductRequest $request)
    {
        $id = $request->id;
        $edit_product = Products::find($id);
        $edit_product->name = $request->name;
        $edit_product->about = $request->about;
        $edit_product->value = $request->value;
        $edit_product->term = $request->term;
        $edit_product->min_amount = $request->min_amount;
        $edit_product->max_amount = $request->max_amount;
        $edit_product->monthly_payment = $request->monthly_payment;
        $edit_product->min_term = $request->min_term;
        $edit_product->max_term = $request->max_term;
        $edit_product->annual_rate = $request->annual_rate;
        $edit_product->FIFD = $request->FIFD;
        $edit_product->commission = $request->commission;
        $edit_product->payment_form = $request->payment_form;
        $edit_product->financing = $request->financing;
        $edit_product->age = $request->age;
        $edit_product->bail = $request->bail;
        $edit_product->documents = $request->documents;
        $edit_product->informations = $request->informations;
        $edit_product->category = $request->category;
        if ( $edit_product->choice == 'image' and ($request->choice == 'percent' || $request->choice == 'manat')){
            $file_path2 = app_path("../public/images/{$edit_product->choice_img}");
            unlink($file_path2);
            $edit_product->choice_img = '';
        }
        $edit_product->choice = $request->choice;
        if ($request->hasfile('choice_img')){
            if ($edit_product->choice_img != ''){
                $file_path = app_path("../public/images/{$edit_product->choice_img}");
                unlink($file_path);
            }
            $file = $request->file('choice_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $edit_product->choice_img = $filename;
        }
        if ($request->hasfile('main_image')){
            $file_path = app_path("../public/images/{$edit_product->image}");
            unlink($file_path);
            $file = $request->file('main_image');
            $extension = $file->getClientOriginalExtension();
            $filename = (time()+1).'.'.$extension;
            $file->move('../public/images/', $filename);
            $edit_product->image = $filename;
        }
        $edit_product->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_product2(EditProduct2Request $request)
    {
        $id = $request->id;
        $edit_product = Products::find($id);
        $edit_product->name = $request->name;
        $edit_product->about = $request->about;
        $edit_product->value = $request->value;
        $edit_product->term = $request->term;
        $edit_product->content = $request->mycontent;
        $edit_product->category = $request->category;
        if ( $edit_product->choice == 'image' and ($request->choice == 'percent' || $request->choice == 'manat')){
            $file_path2 = app_path("../public/images/{$edit_product->choice_img}");
            unlink($file_path2);
            $edit_product->choice_img = '';
        }
        $edit_product->choice = $request->choice;
        if ($request->hasfile('choice_img')) {
            if ($edit_product->choice_img != ''){
                $file_path = app_path("../public/images/{$edit_product->choice_img}");
                unlink($file_path);
            }
            $file = $request->file('choice_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $edit_product->choice_img = $filename;
        }
        if ($request->hasfile('main_image')){
            $file_path = app_path("../public/images/{$edit_product->image}");
            unlink($file_path);
            $file = $request->file('main_image');
            $extension = $file->getClientOriginalExtension();
            $filename = (time()+1).'.'.$extension;
            $file->move('../public/images/', $filename);
            $edit_product->image = $filename;
        }
        $edit_product->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }


    public function delete_product(Request $request)
    {
        $id = $request->id;
        $delete_product = Products::find($id);
        $file_path = app_path("../public/images/{$delete_product->image}");
        unlink($file_path);
        if ($delete_product->choice_img != ''){
            $file_path2 = app_path("../public/images/{$delete_product->choice_img}");
            unlink($file_path2);
        }
        $delete_product->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_product2(Product2Request $request)
    {
        $add_product = new Products();
        $add_product->name = $request->name;
        $add_product->about = $request->about;
        $add_product->value = $request->value;
        $add_product->choice = $request->choice;
        $add_product->term = $request->term;
        $add_product->content = $request->mycontent;
        $add_product->category = $request->category;
        if ($request->hasfile('choice_img')){
            $file = $request->file('choice_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $add_product->choice_img = $filename;
        }
        if ($request->hasfile('main_image')){
            $file = $request->file('main_image');
            $extension = $file->getClientOriginalExtension();
            $filename = (time()+1).'.'.$extension;
            $file->move('../public/images/', $filename);
            $add_product->image = $filename;
        }
        $add_product->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }


    public function add_sup_category(Sup_CatRequest $request)
    {
        $add_category = new Supporter_cat();
        $add_category->category = $request->sup_category;
        $add_category->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'id' => $add_category->id
        ]);
    }

    public function delete_sup_category(Request $request)
    {
        $id = $request->id;
        $delete_category = Supporter_cat::find($id);
        $delete_category->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_sup_category(Sup_CatRequest $request)
    {
        $id = $request->id;
        $edit_category = Supporter_cat::find($id);
        $edit_category->category = $request->category;
        $edit_category->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_supporter(SupporterRequest $request)
    {
        $add_supporter = new Supporters();
        $add_supporter->name = $request->name;
        $add_supporter->city = $request->city;
        $add_supporter->address = $request->address;
        $add_supporter->category = $request->category;
        $add_supporter->phone = $request->phone;
        $add_supporter->about = $request->about;
        $add_supporter->contact_person = $request->contact_person;
        $add_supporter->email = $request->email;
        $add_supporter->website = $request->website;
        $add_supporter->director = $request->director;
        $add_supporter->contact_phone = $request->contact_phone;
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $add_supporter->image = $filename;
        }
        $add_supporter->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_supporter(EditSupportersRequest $request)
    {
        $id = $request->id;
        $edit_supporter = Supporters::find($id);
        $edit_supporter->name = $request->name;
        $edit_supporter->city = $request->city;
        $edit_supporter->address = $request->address;
        $edit_supporter->category = $request->category;
        $edit_supporter->phone = $request->phone;
        $edit_supporter->about = $request->about;
        $edit_supporter->contact_person = $request->contact_person;
        $edit_supporter->email = $request->email;
        $edit_supporter->website = $request->website;
        $edit_supporter->director = $request->director;
        $edit_supporter->contact_phone = $request->contact_phone;
        $edit_supporter->content = $request->mycontent;
        if ($request->hasfile('image')){
            $file_path = app_path("../public/images/{$edit_supporter->image}");
            unlink($file_path);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $edit_supporter->image = $filename;
        }
        else{
            $filename = 1;
        }
        $edit_supporter->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'image' => $filename
        ]);
    }

    public function delete_supporter(Request $request)
    {
        $id = $request->id;
        $delete_supporter = Supporters::find($id);
        $delete_supporter->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function supporter_active(Request $request)
    {
        $id = $request->id;
        $active = Supporters::find($id);
        $active->status = 1;
        $active->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function supporter_deactive(Request $request)
    {
        $id = $request->id;
        $deactive = Supporters::find($id);
        $deactive->status = 0;
        $deactive->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_partner(PartnerRequest $request)
    {
        $add_partner = new Partners();
        $add_partner->name = $request->name;
        $add_partner->city = $request->city;
        $add_partner->address = $request->address;
        $add_partner->category = $request->category;
        $add_partner->phone = $request->phone;
        $add_partner->about = $request->about;
        $add_partner->contact_person = $request->contact_person;
        $add_partner->email = $request->email;
        $add_partner->website = $request->website;
        $add_partner->director = $request->director;
        $add_partner->contact_phone = $request->contact_phone;
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $add_partner->image = $filename;
        }
        $add_partner->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_partner(EditPartnersRequest $request)
    {
        $id = $request->id;
        $edit_partner = Partners::find($id);
        $edit_partner->name = $request->name;
        $edit_partner->city = $request->city;
        $edit_partner->address = $request->address;
        $edit_partner->category = $request->category;
        $edit_partner->phone = $request->phone;
        $edit_partner->about = $request->about;
        $edit_partner->contact_person = $request->contact_person;
        $edit_partner->email = $request->email;
        $edit_partner->website = $request->website;
        $edit_partner->director = $request->director;
        $edit_partner->contact_phone = $request->contact_phone;
        $edit_partner->content = $request->mycontent;
        if ($request->hasfile('image')){
            $file_path = app_path("../public/images/{$edit_partner->image}");
            unlink($file_path);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $edit_partner->image = $filename;
        }
        else{
            $filename = 1;
        }
        $edit_partner->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'image' => $filename
        ]);
    }

    public function delete_partner(Request $request)
    {
        $id = $request->id;
        $delete_partner = Partners::find($id);
        $delete_partner->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function partner_active(Request $request)
    {
        $id = $request->id;
        $active = Partners::find($id);
        $active->status = 1;
        $active->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function partner_deactive(Request $request)
    {
        $id = $request->id;
        $deactive = Partners::find($id);
        $deactive->status = 0;
        $deactive->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_par_category(Par_CatRequest $request)
    {
        $add_category = new Partner_cat();
        $add_category->category = $request->par_category;
        $add_category->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'id' => $add_category->id
        ]);
    }

    public function delete_par_category(Request $request)
    {
        $id = $request->id;
        $delete_category = Partner_cat::find($id);
        $delete_category->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_par_category(Par_CatRequest $request)
    {
        $id = $request->id;
        $edit_category = Partner_cat::find($id);
        $edit_category->category = $request->category;
        $edit_category->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_contact(ContactRequest $request)
    {
        $add_contact = new Contact();
        $add_contact->name_surname = $request->name_surname;
        $add_contact->email = $request->email;
        $add_contact->message = $request->message;
        $add_contact->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function delete_contact(Request $request)
    {
        $id = $request->id;
        $delete_contact = Contact::find($id);
        $delete_contact->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_offer_cat(OfferCategoryRequest $request)
    {
        $add_category = new OfferCat();
        $add_category->name = $request->offer_cat;
        $add_category->about = $request->about;
        $add_category->percent = $request->percent;
        $add_category->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'id' => $add_category->id
        ]);
    }

    public function delete_offer_cat(Request $request)
    {
        $id = $request->id;
        $delete_category = OfferCat::find($id);
        $delete_category->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_offer_cat(EditOfferCategoryRequest $request)
    {
        $id = $request->id;
        $edit_category = OfferCat::find($id);
        $edit_category->name = $request->new_offer_cat;
        $edit_category->about = $request->new_about;
        $edit_category->percent = $request->new_percent;
        $edit_category->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_offer(OffersRequest $request)
    {
        $add_offer = new Offers();
        $add_offer->name = $request->name;
        $add_offer->about = $request->about;
        $add_offer->value = $request->value;
        $add_offer->choice = $request->choice;
        $add_offer->term = $request->term;
        $add_offer->content = $request->mycontent;
        $add_offer->category = $request->category;
        if ($request->hasfile('choice_img')){
            $file = $request->file('choice_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $add_offer->choice_img = $filename;
        }
        if ($request->hasfile('main_image')){
            $file = $request->file('main_image');
            $extension = $file->getClientOriginalExtension();
            $filename = (time()+1).'.'.$extension;
            $file->move('../public/images/', $filename);
            $add_offer->image = $filename;
        }
        $add_offer->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function delete_offer(Request $request)
    {
        $id = $request->id;
        $delete_offer = Offers::find($id);
        $file_path = app_path("../public/images/{$delete_offer->image}");
        unlink($file_path);
        if ($delete_offer->choice_img != ''){
            $file_path2 = app_path("../public/images/{$delete_offer->choice_img}");
            unlink($file_path2);
        }
        $delete_offer->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_offer(EditOffersRequest $request)
    {
        $id = $request->id;
        $edit_offer = Offers::find($id);
        $edit_offer->name = $request->name;
        $edit_offer->about = $request->about;
        $edit_offer->value = $request->value;
        $edit_offer->choice = $request->choice;
        $edit_offer->term = $request->term;
        $edit_offer->content = $request->mycontent;
        $edit_offer->category = $request->category;
        if ($request->hasfile('choice_img')){
            $file_path = app_path("../public/images/{$edit_offer->choice_img}");
            unlink($file_path);
            $file = $request->file('choice_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $edit_offer->choice_img = $filename;
        }
        if ($request->hasfile('main_image')){
            $file_path = app_path("../public/images/{$edit_offer->image}");
            unlink($file_path);
            $file = $request->file('main_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $edit_offer->image = $filename;
        }
        $edit_offer->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function menu_active(Request $request)
    {
        $id = $request->id;
        $active = Menus::find($id);
        $active->status = 1;
        $active->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function menu_deactive(Request $request)
    {
        $id = $request->id;
        $deactive = Menus::find($id);
        $deactive->status = 0;
        $deactive->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function contact_info(ContactInfoRequest $request)
    {
        if (ContactInfo::find(1)) {
            $contact_info = ContactInfo::find(1);
        }
        else {
            $contact_info = new ContactInfo();
        }
        $contact_info->address = $request->address;
        $contact_info->phone = $request->phone;
        $contact_info->fax = $request->fax;
        $contact_info->hotline = $request->hotline;
        $contact_info->email = $request->email;
        $contact_info->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_finance(FinanceRequest $request)
    {
        $finance = new Finance();
        $finance->content = $request->mycontent;
        $finance->header = $request->header;
        $finance->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_finance(FinanceRequest $request)
    {
        $id = $request->id;
        $finance = Finance::find($id);
        $finance->content = $request->mycontent;
        $finance->header = $request->header;
        $finance->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function delete_finance(Request $request)
    {
        $id = $request->id;
        $finance = Finance::find($id);
        $finance->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }
}
