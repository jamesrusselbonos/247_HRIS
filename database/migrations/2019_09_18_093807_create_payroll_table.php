<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayrollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrolls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_id');
            $table->double('no_days_worked', 8, 2);
            $table->double('daily_rate', 8, 2);
            $table->double('rate_per_hour', 8, 2);
            $table->double('basic_pay', 8, 2);
            $table->double('total_absences', 8, 2);
            $table->double('unpaid_absences', 8, 2);
            $table->double('charged_to_SIL', 8, 2);
            $table->double('amount_absences', 8, 2);
            $table->double('allowance', 8, 2);
            $table->double('adjustment_incentives', 8, 2)->default('0.00')->nullable();
            $table->double('no_legal_holidays', 8, 2)->default('0.00')->nullable();
            $table->double('amount_holidays', 8, 2)->default('0.00')->nullable();
            $table->double('regular_OT_hours', 8, 2)->default('0.00')->nullable();
            $table->double('regular_OT_amount', 8, 2)->default('0.00')->nullable();
            $table->double('restday_OT_hours', 8, 2)->default('0.00')->nullable();
            $table->double('restday_OT_amount', 8, 2)->default('0.00')->nullable();
            $table->double('legal_holiday_OT_hours', 8, 2)->default('0.00')->nullable();
            $table->double('legal_holiday_OT_amount', 8, 2)->default('0.00')->nullable();
            $table->double('special_holiday_OT_hours', 8, 2)->default('0.00')->nullable();
            $table->double('special_holiday_OT_amount', 8, 2)->default('0.00')->nullable();
            $table->double('no_hours_rendered', 8, 2)->default('0.00')->nullable();
            $table->double('amount_night_diffential', 8, 2)->default('0.00')->nullable();
            $table->double('no_hours_undertime', 8, 2);
            $table->double('no_hours_late', 8, 2);
            $table->double('tardiness_amount', 8, 2);
            $table->double('gross_pay', 8, 2);
            $table->double('SSS_payroll', 8, 2);
            $table->double('PHIC_payroll', 8, 2);
            $table->double('HDMF_payroll', 8, 2);
            $table->double('total_deduction_benefits', 8, 2);
            $table->double('SSS_loan', 8, 2)->default('0.00')->nullable();
            $table->double('company_loan', 8, 2)->default('0.00')->nullable();
            $table->double('HDMF_loan', 8, 2)->default('0.00')->nullable();
            $table->double('uniform', 8, 2)->default('0.00')->nullable();
            $table->double('total_deduction_loan', 8, 2)->default('0.00')->nullable();
            $table->double('tax', 8, 2)->default('0.00')->nullable();
            $table->double('net_pay', 8, 2);
            $table->date('date_from');
            $table->date('date_to');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payroll');
    }
}
