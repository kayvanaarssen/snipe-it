<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory 도메인',
    'ad_domain_help'			=> '이것은 보통은 당신의 이메일 주소와 같지만, 항상 같지는 않습니다.',
    'ad_append_domain_label'    => '도메인 추가',
    'ad_append_domain'          => 'username 필드에 도메인 추가',
    'ad_append_domain_help'     => '사용자는 "username@domain.local" 꼴로 입력할 필요가 없으며 "username"만 입력하면 됩니다.',
    'admin_cc_email'            => '참조 이메일',
    'admin_cc_email_help'       => '사용자에게 보낸 반입/반출 이메일 사본을 추가 이메일 계정으로 보내려면, 여기에 입력하세요. 그렇지 않으면 이 필드를 비워 두세요.',
    'admin_settings'            => 'Admin Settings',
    'is_ad'				        => '이것은 액티브 디렉토리 서버입니다.',
    'alerts'                	=> 'Alerts',
    'alert_title'               => 'Update Notification Settings',
    'alert_email'				=> '알림 전송',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> '알림 사용',
    'alert_interval'			=> '(일자) 최대값 만료 알림',
    'alert_inv_threshold'		=> '재고 알림 최대값',
    'allow_user_skin'           => '유저 스킨 허용',
    'allow_user_skin_help_text' => '이 항목을 선택하면 사용자가 다른 UI 스킨을 다른 스킨으로 변경하는 것을 허용합니다.',
    'asset_ids'					=> '자산 ID',
    'audit_interval'            => '감사 간격',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => '감사 경고 임계값',
    'audit_warning_days_help'   => '자산 회계 감사가 예정되어 있을 때 몇 일 전에 경고할까요?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> '접두사 (부가적)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> '예비품',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> '바코드 설정',
    'confirm_purge'			    => '삭제 확인',
    'confirm_purge_help'		=> '삭제된 레코드를 제거하려면 아래 입력 란에 "DELETE" 텍스트를 입력하십시오. 이 작업은 취소할 수 없으며 일시 삭제된 모든 항목과 사용자를 영구적으로 삭제합니다. (작업 전 백업을 진행하시기 바랍니다.)',
    'custom_css'				=> '사용자 지정 CSS',
    'custom_css_help'			=> '사용하려는 사용자 CSS를 입력하세요. &lt;style&gt;&lt;/style&gt; 태그들은 넣지 마세요.',
    'custom_forgot_pass_url'	=> '사용자정의 암호 재설정 URL',
    'custom_forgot_pass_url_help'	=> '이것은 로그인 화면에 내장된 잊어버린 비밀번호 URL을 변경하여, 내부 또는 호스트 LDAP 암호 재설정 기능으로 사람들을 안내할 때 유용합니다. 로컬 사용자가 잊어버린 비밀번호 기능을 효과적으로 비활성화합니다.',
    'dashboard_message'			=> '대시보드 메시지',
    'dashboard_message_help'	=> '이 문구는 대시보드 조회 권한이 있는 모든 사용자 대상으로 대시보드에 표시됩니다.',
    'default_currency'  		=> '기본 통화',
    'default_eula_text'			=> '기본 사용권 계약',
    'default_language'			=> '기본 언어',
    'default_eula_help_text'	=> '또한 특정 자산 분류에는 맞춤형 사용권 계약들과 연결을 해야 합니다.',
    'acceptance_note'           => 'Add a note for your decision (Optional)',
    'display_asset_name'        => '자산 명 표시',
    'display_checkout_date'     => '반출 일자 표시',
    'display_eol'               => '테이블 보기에서 폐기일 표시',
    'display_qr'                => 'Qr 코드 표시',
    'display_alt_barcode'		=> '1 D 바코드 표시',
    'email_logo'                => '이메일 내 로고',
    'barcode_type'				=> '2D 바코드 형식',
    'alt_barcode_type'			=> '1D 바코드 형식',
    'email_logo_size'       => '이메일 첨부 시, 사각형 로고가 가장 적합합니다. ',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> '최종 사용 계약 설정',
    'eula_markdown'				=> '이 최종 사용 계약은 <a href="https://help.github.com/articles/github-flavored-markdown/">GFM을 따른다</a>.',
    'favicon'                   => '파비콘',
    'favicon_format'            => 'ico, png, gif 확장자만 혀용됩니다. 다른 이미지 포맷의 경우 모든 브라우저에서 작동하지 않을 수 있습니다.',
    'favicon_size'          => '파비콘은 16x16 픽셀을 가지는 사각형 이미지여야 합니다.',
    'footer_text'               => '추가 꼬리말',
    'footer_text_help'          => '이 글은 오른쪽 꼬리말에 보여집니다. 링크는 <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>를 참조하시면 됩니다. 줄 바꿈 머리글, 이미지 등은 보여지지 않습니다.',
    'general_settings'			=> '일반 설정',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula, gravatar, tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> '백업 생성',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => '머릿말 색상',
    'info'                      => '이 설정들은 설치본의 특정 분야를 설정하는 것입니다.',
    'label_logo'                => '라벨 로고',
    'label_logo_size'           => '정사각형 로고가 가장 보기 좋습니다. 로고는 각 자산 레이블의 오른쪽 상단에 표시됩니다. ',
    'laravel'                   => 'Laravel 버전',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'no_default_group'          => 'No Default Group',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP 사용자 키',
    'ldap_client_tls_cert'      => 'LDAP 사용자 인증서',
    'ldap_enabled'              => 'LDAP 활성',
    'ldap_integration'          => 'LDAP 연동',
    'ldap_settings'             => 'LDAP 설정',
    'ldap_client_tls_cert_help' => '클라이언트 측 TLS 인증서 및 LDAP 연결용 키는 일반적으로 \'보안 LDAP\'가 포함된 Google Workspace 구성에서만 유용합니다.',
    'ldap_location'             => 'LDAP Location',
'ldap_location_help'             => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help'      => '위에서 지정한 기본 DN의 유효한 LDAP 사용자 이름 및 비밀번호를 입력하여 LDAP 로그인이 올바르게 구성되었는지 테스트하십시오. 반드시 업데이트 된 LDAP 설정을 먼저 저장해야합니다.',
    'ldap_login_sync_help'      => '이것은 LDAP가 올바르게 동기화 될 수 있는지 테스트합니다. LDAP 인증 질의어가 올바르지 않으면 사용자가 여전히 로그인하지 못할 수 있습니다. 반드시 업데이트 된 LDAP 설정을 먼저 저장해야합니다.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'LDAP 서버',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted) or ldaps:// (for TLS or SSL)',
    'ldap_server_cert'			=> 'LDAP SSL 인증서 확인',
    'ldap_server_cert_ignore'	=> '유효하지 않은 SSL 인증서 허용',
    'ldap_server_cert_help'		=> '자체 서명한 SSL 인증서를 사용하고, 유효하지 않은 SSL 인증서 사용을 승인하고자 하는 경우, 이 확인 상자를 선택하십시오.',
    'ldap_tls'                  => 'TLS 사용',
    'ldap_tls_help'             => '이것은 LDAP 서버에서 STARTTLS를 실행하는 경우에만 검사됩니다. ',
    'ldap_uname'                => 'LDAP 연결용 사용자명',
    'ldap_dept'                 => 'LDAP 부서',
    'ldap_phone'                => 'LDAP 전화번호',
    'ldap_jobtitle'             => 'LDAP 직위',
    'ldap_country'              => 'LDAP 국가',
    'ldap_pword'                => 'LDAP 연결용 비밀번호',
    'ldap_basedn'               => 'Base BIND DN',
    'ldap_filter'               => 'LDAP 필터',
    'ldap_pw_sync'              => 'LDAP 암호 동기화',
    'ldap_pw_sync_help'         => '로컬 암호와 PDAP 암호를 동기화 하지 않으려면 이 박스의 체크를 풀어주세요. 이것을 해제하면 당신의 LDAP 서버에 여러 원인으로 접속할 수 없다면 사용자들도 로그인 할 수 없게 됩니다.',
    'ldap_username_field'       => '사용자명 항목',
    'ldap_lname_field'          => '성:',
    'ldap_fname_field'          => 'LDAP 이름',
    'ldap_auth_filter_query'    => 'LDAP 인증 요청',
    'ldap_version'              => 'LDAP 버전',
    'ldap_active_flag'          => 'LDAP 활성 플래그',
    'ldap_activated_flag_help'  => '이 값은 동기화된 사용자가 Snipe-IT에 로그인할 수 있는지 여부를 결정하는 데 사용됩니다. <strong> 항목을 체크인하거나 체크아웃하는 기능에는 영향을 미치지 않으며, AD/LDAP 내에서 값이 아닌 <strong> 속성 이름이어야 합니다. <br><br>이 필드가 AD/LDAP에 없는 필드 이름으로 설정되거나 AD/LDAP 필드의 값이 <code>0/code> 또는 <code>false/code>로 설정된 경우, <strong> 사용자 로그인이 비활성화됩니다. AD/LDAP 필드의 값이 <code>1</code>, <code>true</code> 또는 다른 텍스트<em>로 설정되어 있으면 사용자가 로그인할 수 있습니다. AD에서 필드가 비어 있으면 일반적으로 일시 중단되지 않은 사용자가 로그인할 수 있는 <code>userAccountControl</code> 속성을 사용합니다.',
    'ldap_emp_num'              => 'LDAP 피고용인 번호',
    'ldap_email'                => 'LDAP 이메일',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => '소프트웨어 라이센스',
    'load_remote'               => 'Load Remote Avatars',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load avatars from Gravatar or other outside sources.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => '성공?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => '로그인 참고',
    'login_note_help'           => '선택적으로 분실되거나 도난당한 장치를 찾은 사람들을 돕기 위한, 로그인 화면에 몇 문장을 포함하십시오. 이 항목에는 <a href="https://help.github.com/articles/github-flavored-markdown/"> Github flavored markdown </a>를 사용할 수 있습니다.',
    'login_remote_user_text'    => '원격 사용자 로그인 옵션',
    'login_remote_user_enabled_text' => '원격 사용자 헤더로 로그인 활성화',
    'login_remote_user_enabled_help' => '이 옵션은 "공용 게이트웨이 인터페이스 (rfc3875)" 를 따르는 REMOTE_USER 헤더를 통한 인증을 활성화 합니다',
    'login_common_disabled_text' => '다른 인증 메커니즘 비활성화',
    'login_common_disabled_help' => '이 옵션은 다른 인증 메커니즘을 비활성화 합니다. REMOTE_USER 로그인이 이미 작동하고 있다면 이 옵션을 활성화 하세요.',
    'login_remote_user_custom_logout_url_text' => '사용자 정의 로그아웃 URL',
    'login_remote_user_custom_logout_url_help' => '채워진 사용자는 SnipeIT 세션이 종료된 후에 이 URL로 리디렉션됩니다. 이 기능은 인증 제공자의 사용자 세션을 정확하게 닫는데 유용합니다.',
    'login_remote_user_header_name_text' => '사용자 정의 사용자 이름 헤더',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> '로고',
    'logo_print_assets'         => '인쇄물에 사용',
    'logo_print_assets_help'    => '브랜딩을 자산 목록 인쇄물에 사용합니다.',
    'full_multiple_companies_support_help_text' => '자신이 속한 공급자 자산에 공급자를 할당하는 것을 제한하는 사용자들 (관리자 포함)',
    'full_multiple_companies_support_text' => '전체 다중 공급자들 지원',
    'show_in_model_list'   => '모델 드롭다운에 표시',
    'optional'					=> '선택 사항',
    'per_page'                  => '페이지 당 결과',
    'php'                       => 'PHP 버전',
    'php_info'                  => 'PHP info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'QR 코드를 보려면 php-gd를 설치하셔야 합니다. 설치 설명서를 참고하세요.',
    'php_gd_warning'            => 'PHP 이미지 처리 및 GD 플러그인이 설치되어 있지 않습니다.',
    'pwd_secure_complexity'     => '비밀번호 복잡성',
    'pwd_secure_complexity_help' => '어떤 비밀번호 복잡성 규칙을 적용할지 선택하십시오.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => '비밀번호 최소 글자수',
    'pwd_secure_min_help'       => '최소 8자 이상',
    'pwd_secure_uncommon'       => '자주쓰이는 비밀번호 방지',
    'pwd_secure_uncommon_help'  => '이것은 사용자가 위변조로 보고된 상위 10,000 개의 비밀번호를 기반해 일반적으로 사용되는 비밀번호를 허용하지 않게 합니다.',
    'qr_help'                   => '이 것을 설정하려면 먼저 QR 코드 사용하기를 하세요',
    'qr_text'                   => 'QR 코드 문구',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML 활성화됨',
    'saml_integration'          => 'SAML 통합',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => '공인된 인증서',
    'saml_sp_metadata_url'      => '메타데이터 URL',
    'saml_idp_metadata'         => 'SAML IdP 메타데이터',
    'saml_idp_metadata_help'    => 'URL 또는 XML 파일로 IdP 메타데이터를 지정할 수 있습니다.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML 강제 로그인',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => '설정',
    'settings'                  => '설정',
    'show_alerts_in_menu'       => '상단 메뉴에 경고 표시',
    'show_archived_in_list'     => '보관된 자산',
    'show_archived_in_list_text'     => '"모든 자산" 목족에 보관된 자산 표시',
    'show_assigned_assets'      => '할당된 자산 보기',
    'show_assigned_assets_help' => '사용자 보기 -> 자산, 사용자 보기 -> 정보 -> 할당된 모든 항목 인쇄 및 계정 -> 할당된 자산 보기에서 다른 자산에 할당된 자산을 표시합니다.',
    'show_images_in_email'     => '이메일에 이미지 표시',
    'show_images_in_email_help'   => 'Snipe-IT 설치가 VPN 또는 폐쇄 형 네트워크 하에 있고 네트워크 외부 사용자가 이 설치에서 제공된 이미지를 이메일에 불러올수 없는 경우 이 상자의 선택을 해제하세요.',
    'site_name'                 => '사이트 명',
    'integrations'               => 'Integrations',
    'slack'                     => 'Slack',
    'general_webhook'           => 'General Webhook',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Test to Save',
    'webhook_title'               => 'Update Webhook Settings',
    'webhook_help'                => 'Integration settings',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Channel',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Settings',
    'webhook_test'                 =>'Test :app integration',
    'webhook_integration_help'    => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button'    => 'Once you have saved your :app information, a test button will appear.',
    'webhook_test_help'           => 'Test whether your :app integration is configured correctly. YOU MUST SAVE YOUR UPDATED :app SETTINGS FIRST.',
    'shortcuts_enabled'         => 'Enable Shortcuts',
    'shortcuts_help_text'       => '<strong>Windows</strong>: Alt + Access key, <strong>Mac</strong>: Control + Option + Access key',
    'snipe_version'  			=> 'Snipe-IT 버전',
    'support_footer'            => '꼬리말 링크 지원',
    'support_footer_help'       => 'Snipe-IT 지원 정보 및 사용자 매뉴얼 보기 권한 설정',
    'version_footer'            => '바닥글에 버전 ',
    'version_footer_help'       => 'Snipe-IT 버전과 빌드 번호를 볼 수 있는 사용자를 지정합니다.',
    'system'                    => '시스템 정보',
    'update'                    => '갱신 설정',
    'value'                     => '가치',
    'brand'                     => '브랜딩',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => '설정에 관해',
    'about_settings_text'       => '이 설정들은 설치본의 특정 분야를 설정하는 것입니다.',
    'labels_per_page'           => '페이지 당 꼬리표',
    'label_dimensions'          => '꼬리표 크기(인치)',
    'next_auto_tag_base'        => '다음 자동 증가',
    'page_padding'              => '페이지 여백 (인치)',
    'privacy_policy_link'       => '개인정보 보호정책 링크',
    'privacy_policy'            => '개인정보 보호정책',
    'privacy_policy_link_help'  => '여기에 url이 포함되어 있으면, GDPR을 준수하는 개인정보 보호정책에 대한 링크가, 어플리케이션 최하단과 시스템에서 발송하는 모든 이메일에 포함됩니다. ',
    'purge'                     => '삭제된 기록들 지우기',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => '꼬리표 아래쪽 가운데 여백',
    'labels_display_sgutter'    => '꼬리표 옆쪽 가운데 여백',
    'labels_fontsize'           => '꼬리표 글꼴 크기',
    'labels_pagewidth'          => '꼬리표 지 넓이',
    'labels_pageheight'         => '꼬리표 지 높이',
    'label_gutters'        => '꼬리표 여백(인치)',
    'page_dimensions'        => '꼬리표 면적(인치)',
    'label_fields'          => '꼬리표 가시 항목',
    'inches'        => '인치',
    'width_w'        => '넓이',
    'height_h'        => '높이',
    'show_url_in_emails'                => 'Snipe-IT에 이메일로 링크',
    'show_url_in_emails_help_text'      => '전자 메일 바닥 글에 Snipe-IT 설치를 다시 연결하지 않으려면이 상자를 선택 취소하십시오. 대부분의 사용자가 로그인하지 않는 경우 유용합니다.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => '최대 썸네일 높이',
    'thumbnail_max_h_help'   => '섬네일이 목록 보기에 표시될 수있는 최대 높이 (픽셀) 입니다. 최소 25, 최대 500.',
    'two_factor'        => '2단계 인증',
    'two_factor_secret'        => '2단계 코드',
    'two_factor_enrollment'        => '2단계 등록',
    'two_factor_enabled_text'        => '2중 활성화',
    'two_factor_reset'        => '2중 보안 재설정',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with their authenticator app again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => '2중 장치 재설정이 되었습니다',
    'two_factor_reset_error'          => '2중 장치 재설정이 실패했습니다',
    'two_factor_enabled_warning'        => '2중 활성화가 현재 활성화되지 않다면 구글 인증으로 등록된 장치를 즉시 강제로 인증하게 할 것입니다. 당신은 하나가 현재 등록되지 않았다면 당신의 장치를 등록할 수 있어야 합니다.',
    'two_factor_enabled_help'        => '이 것은 구글 인증을 사용하는 2중 인증 기능을 동작시킵니다.',
    'two_factor_optional'        => '선택적 (허용 하는 경우 사용자가 활성화 하거나 비활성화할 수 있습니다)',
    'two_factor_required'        => '모든 사용자에게 필수',
    'two_factor_disabled'        => '비활성화',
    'two_factor_enter_code'	=> '2중 코드 입력',
    'two_factor_config_complete'	=> '코드 제출',
    'two_factor_enabled_edit_not_allowed' => '관리자가 이 설정의 수정을 허용하지 않았습니다.',
    'two_factor_enrollment_text'	=> "2중 인증은 필수입니다만, 당신의 장치는 아직 등록되지 않았습니다. 구글 인증 앱을 실행하고 등록할 장치 아래의 QR 코드를 스캔하세요. 당신의 장치가 등록됐다면, 아래 코드를 입력하세요",
    'require_accept_signature'      => '서명 필수',
    'require_accept_signature_help_text'      => '이 기능을 활성화하면 자산 수락시에 물리적 서명을 필수로 하게 됩니다.',
    'left'        => '왼쪽',
    'right'        => '오른쪽',
    'top'        => '위',
    'bottom'        => '아래',
    'vertical'        => '수직',
    'horizontal'        => '수평',
    'unique_serial'                => '고유 일련번호',
    'unique_serial_help_text'                => '이 상자를 선택하면 자산 일련 번호를 생성하는 제약 조건이 적용됩니다.',
    'zerofill_count'        => '0 채움을 포함한, 자산 태그 길이',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
    'oauth_title' => 'OAuth API Settings',
    'oauth_clients' => 'OAuth Clients',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'oauth_no_clients' => 'You have not created any OAuth clients yet.',
    'oauth_secret' => 'Secret',
    'oauth_authorized_apps' => 'Authorized Applications',
    'oauth_redirect_url' => 'Redirect URL',
    'oauth_name_help' => ' Something your users will recognize and trust.',
    'oauth_scopes' => 'Scopes',
    'oauth_callback_url' => 'Your application authorization callback URL.',
    'create_client' => 'Create Client',
    'no_scopes' => 'No scopes',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email Alerts & Audit Settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Label sizes &amp; settings',
    'purge_keywords' => 'permanently delete',
    'purge_help' => '삭제된 기록들 지우기',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => '사원번호',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
    'label2_enable'           => 'New Label Engine',
    'label2_enable_help'      => 'Switch to the new label engine. <b>Note: You will need to save this setting before setting others.</b>',
    'label2_template'         => 'Template',
    'label2_template_help'    => 'Select which template to use for label generation',
    'label2_title'            => '제목',
    'label2_title_help'       => 'The title to show on labels that support it',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Use Asset Logo',
    'label2_asset_logo_help'  => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type'          => '1D Barcode Type',
    'label2_1d_type_help'     => 'Format for 1D barcodes',
    'label2_2d_type'          => '2D 바코드 형식',
    'label2_2d_type_help'     => 'Format for 2D barcodes',
    'label2_2d_target'        => '2D Barcode Target',
    'label2_2d_target_help'   => 'The URL the 2D barcode points to when scanned',
    'label2_fields'           => 'Field Definitions',
    'label2_fields_help'      => 'Fields can be added, removed, and reordered in the left column. For each field, multiple options for Label and DataSource can be added, removed, and reordered in the right column.',
    'help_asterisk_bold'    => 'Text entered as <code>**text**</code> will be displayed as bold',
    'help_blank_to_use'     => 'Leave blank to use the value from <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default'               => 'Default',
    'none'                  => 'None',
    'google_callback_help' => 'This should be entered as the callback URL in your Google OAuth app settings in your organization&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Google Workspace Login Settings',
    'enable_google_login'  => 'Enable users to login with Google Workspace',
    'enable_google_login_help'  => 'Users will not be automatically provisioned. They must have an existing account here AND in Google Workspace, and their username here must match their Google Workspace email address. ',
    'mail_reply_to' => 'Mail Reply-To Address',
    'mail_from' => 'Mail From Address',
    'database_driver' => 'Database Driver',
    'bs_table_storage' => 'Table Storage',
    'timezone' => 'Timezone',
    'profile_edit'          => 'Edit Profile',
    'profile_edit_help'          => 'Allow users to edit their own profiles.',
    'default_avatar' => 'Upload custom default avatar',
    'default_avatar_help' => 'This image will be displayed as a profile if a user does not have a profile photo.',
    'restore_default_avatar' => 'Restore <a href=":default_avatar" data-toggle="lightbox" data-type="image">original system default avatar</a>',
    'restore_default_avatar_help' => '',

];
