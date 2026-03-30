@extends('layout.master')
@section('content')

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>School Admission List</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

      
        <!--Admission List Start-->
        <section class="admission-list" style="background-color: #f8f9fa; padding: 80px 0;">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Admission Success</span>
                    <div class="section-title-shape">
                        <img src="{{ asset('assets/assets/images/shapes/section-title-shape-1.png')}}" alt="">
                    </div>
                    <h2 class="section-title__title">Admission List 2025/2026 Session</h2>
                </div>
                
                <!-- Year 7 Students -->
                <div class="row mb-5">
                    <div class="col-xl-12">
                        <div class="admission-year-group">
                            <h3 class="admission-year-title" style="color: #2c5aa0; font-size: 24px; margin-bottom: 30px; text-align: center; position: relative;">
                                <span style="background: #f8f9fa; padding: 0 20px;">Year 7 Students</span>
                                <div style="position: absolute; top: 50%; left: 0; right: 0; height: 2px; background: #2c5aa0; z-index: -1;"></div>
                            </h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #28a745;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Olamide Sokunbi</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Junior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #28a745; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 7
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Year 8 Students -->
                <div class="row mb-5">
                    <div class="col-xl-12">
                        <div class="admission-year-group">
                            <h3 class="admission-year-title" style="color: #2c5aa0; font-size: 24px; margin-bottom: 30px; text-align: center; position: relative;">
                                <span style="background: #f8f9fa; padding: 0 20px;">Year 8 Students</span>
                                <div style="position: absolute; top: 50%; left: 0; right: 0; height: 2px; background: #2c5aa0; z-index: -1;"></div>
                            </h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #17a2b8;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Israel Ogunleye</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Junior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #17a2b8; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 8
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Year 9 Students -->
                <div class="row mb-5">
                    <div class="col-xl-12">
                        <div class="admission-year-group">
                            <h3 class="admission-year-title" style="color: #2c5aa0; font-size: 24px; margin-bottom: 30px; text-align: center; position: relative;">
                                <span style="background: #f8f9fa; padding: 0 20px;">Year 9 Students</span>
                                <div style="position: absolute; top: 50%; left: 0; right: 0; height: 2px; background: #2c5aa0; z-index: -1;"></div>
                            </h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #ffc107;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">David Njoku</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Junior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #ffc107; color: #333; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 9
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Year 10 Students -->
                <div class="row mb-5">
                    <div class="col-xl-12">
                        <div class="admission-year-group">
                            <h3 class="admission-year-title" style="color: #2c5aa0; font-size: 24px; margin-bottom: 30px; text-align: center; position: relative;">
                                <span style="background: #f8f9fa; padding: 0 20px;">Year 10 Students</span>
                                <div style="position: absolute; top: 50%; left: 0; right: 0; height: 2px; background: #2c5aa0; z-index: -1;"></div>
                            </h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #dc3545;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Michael Obalolu</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #dc3545; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 10
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #dc3545;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Emmanuel Njoku</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #dc3545; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 10
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #dc3545;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Oluwasekemi Oniya</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #dc3545; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 10
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #dc3545;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Aisha Koleosho</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #dc3545; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 10
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #dc3545;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Sunday Oluwashindara Faith</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #dc3545; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 10
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Year 11 Students -->
                <div class="row mb-5">
                    <div class="col-xl-12">
                        <div class="admission-year-group">
                            <h3 class="admission-year-title" style="color: #2c5aa0; font-size: 24px; margin-bottom: 30px; text-align: center; position: relative;">
                                <span style="background: #f8f9fa; padding: 0 20px;">Year 11 Students</span>
                                <div style="position: absolute; top: 50%; left: 0; right: 0; height: 2px; background: #2c5aa0; z-index: -1;"></div>
                            </h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #6f42c1;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Animashaun Ewaoluwa Adepeju</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #6f42c1; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 11
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Year 12 Students -->
                <div class="row mb-5">
                    <div class="col-xl-12">
                        <div class="admission-year-group">
                            <h3 class="admission-year-title" style="color: #2c5aa0; font-size: 24px; margin-bottom: 30px; text-align: center; position: relative;">
                                <span style="background: #f8f9fa; padding: 0 20px;">Year 12 Students</span>
                                <div style="position: absolute; top: 50%; left: 0; right: 0; height: 2px; background: #2c5aa0; z-index: -1;"></div>
                            </h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #fd7e14;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Lawal Harafat Abisola</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #fd7e14; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #fd7e14;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Animashaun Eyinojuoluwa</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #fd7e14; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #fd7e14;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Odeh Rebecca Anthonia</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #fd7e14; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #fd7e14;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Olofin Deborah Oluwafeyikemi</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #fd7e14; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #fd7e14;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Badmus Adesola</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #fd7e14; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #fd7e14;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Afolorunsho Racheal</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #fd7e14; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #fd7e14;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Oniya Sijibomi</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #fd7e14; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #fd7e14;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Idowu Emmanuel</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #fd7e14; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #fd7e14;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Adeyemi Janet</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #fd7e14; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #fd7e14;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Akinbode Aminat</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #fd7e14; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #fd7e14;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Malaolu Oluwafifunmi Olutomiwa</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #fd7e14; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #fd7e14;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Sokunbi Ayomikun</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #fd7e14; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <div class="admission-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #fd7e14;">
                                        <div class="student-info" style="display: flex; align-items: center; justify-content: space-between;">
                                            <div>
                                                <h5 style="color: #333; margin: 0; font-weight: 600;">Ogunsanya Oluwafisayomi Rebecca</h5>
                                                <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Senior High School</p>
                                            </div>
                                            <div class="admission-badge" style="background: #fd7e14; color: white; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                                                YEAR 12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Summary Statistics -->
                <div class="row mt-5">
                    <div class="col-xl-12">
                        <div class="admission-summary" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 40px; border-radius: 15px; text-align: center;">
                            <h3 style="color: white; margin-bottom: 20px;">Admission Statistics 2025/2026</h3>
                            <div class="row">
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="stat-item">
                                        <h4 style="font-size: 36px; margin: 0; font-weight: bold;">22</h4>
                                        <p style="margin: 5px 0 0 0; opacity: 0.9;">Total Students</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="stat-item">
                                        <h4 style="font-size: 36px; margin: 0; font-weight: bold;">2</h4>
                                        <p style="margin: 5px 0 0 0; opacity: 0.9;">Junior High</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="stat-item">
                                        <h4 style="font-size: 36px; margin: 0; font-weight: bold;">20</h4>
                                        <p style="margin: 5px 0 0 0; opacity: 0.9;">Senior High</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="stat-item">
                                        <h4 style="font-size: 36px; margin: 0; font-weight: bold;">6</h4>
                                        <p style="margin: 5px 0 0 0; opacity: 0.9;">Year Levels</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Admission List End-->

@endsection