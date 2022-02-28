<?php

namespace App\Models;

use App\Services\DepartmentService;
use App\Services\RewardService;
use App\Services\RoleService;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [

        'nationalId',
        'name',
        'email',
        'password',
        'phone',
        'address',
        'photo',
        'isAdmin',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',

        'email_verified_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];}

//   public function getDepartmentsAttribute(){
//       $departments = $this->departmentsId ?? "";
//       $departments = $departments != "" ? preg_split("[;]",$departments) : [];
//       $result = [];
//       foreach ($departments as $d) {
//           $department = (new DepartmentService())->getOne($d);
//           array_push($result, $department);
//       }
//       return $result;
//   }
//
//   public function getRewardsAttribute(){
//       $rewards = $this->rewardsId ?? "";
//       $rewards = $rewards != "" ? preg_split("[;]",$rewards) : [];
//       $result = [];
//       foreach ($rewards as $r) {
//           $reward = (new RewardService())->getOne($r);
//           $categoryName = $reward->category->name;
//           $reward = $reward->toArray();
//           $reward = array_merge($reward, [ "category" => $categoryName ]);
//           array_push($result, $reward);
//       }
//       return $result;
//   }
//
//   public function getMemberAttribute(){
//       return $this->hasOne(Member::class, "userId", "uniqueId")->firstOrNew();
//   }
//
//   public function getMembersAttribute(){
//       $member = $this->getMemberAttribute();
//       return $member->members;
//   }
//
//   public function getHasMembersAttribute() {return count($this->getMembersAttribute() ?? []) > 0;}
//
//   public function getProposalsAttribute() {
//       return $this->hasMany(Proposal::class, "userId", "uniqueId")->get();
//   }
//
//    public function getProposalRepliesAttribute() {
//        return $this->hasMany(Proposal::class, "replyFrom", "uniqueId")->get();
//    }
//
//    public function getReportsAttribute() {
//        return $this->hasMany(Report::class, "userId", "uniqueId")->get();
//    }
//
//    public function getNotificationsAttribute() {
//       $notes = [];
//       foreach (Notification::all() as $note) {
//           $users = $note->userIds;
//           if ($users == "*" || in_array($this->uniqueId, preg_split("[;]",$users))) {
//               array_push($notes,$note);
//           }
//       }
//       return $notes;
//    }
//
//    public function getVisitsAttribute() {
//       return $this->hasMany(Visit::class, "userId", "uniqueId")->get();
//    }
//
//    public function getTodayVisitAttribute() {
//        return $this->hasMany(Visit::class, "userId", "uniqueId")->whereDate("arriveTime", Carbon::today() )->first();
//    }
//
//    public function getHasVisitTodayAttribute() {
//       if ($this->getTodayVisitAttribute() != null) {
//           return true;
//       }
//       return false;
//    }
//
//    public function getComplaintsAttribute() {
//        return $this->hasMany(Complaint::class, "userId", "uniqueId")->get();
//    }
//
//}
