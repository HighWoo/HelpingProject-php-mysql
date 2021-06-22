# capstoneproject
## 작업일지
### 일주일에 한번씩 진행하는 프로젝트로 PHP,Mysql,notepad를 사용하여 작성하였음
### 팀장:박상우
### 팀 프로젝트로 팀원은 대학동기 강재은,김찬영,박상우 

### <1차 4/12>  - Login.html(로그인) , Signup.html(회원가입) 기본틀 작성 , 아이콘 제작 , Main.html기본틀 제작
---
### <2차 4/19>  - Login.html(로그인) , Signup.html(회원가입) 완성 , 아이콘 적용 , Main.html제작
---
### <3차 4/26>  - 시험기간으로 인한 회의 미실시
---
### <4차 5/3>  - main.html을 로그인 전 후인 blogmain과 alogmain으로 분할 , User 데이터 베이스,매칭 데이터베이스 제작

### <5차 5/11> 강재은- User.html, Umat.php, Vol.html, Vmat.php 업로드 완료현재 구인게시판 등록할 수 있으며 구직게시판 틀만 잡음
### <5차 5/11> 박상우- Signup.php와user.db연동하여 회원등록이 가능하게 제작완료
### <5차 5/11> 김찬영-Guide.html(사이트소개) ,Vinfor.html(봉사현황),informch.html(정보수정), Vollookup.html(봉사활동 내역조회), informodlogin.html(내정보 비밀번호 입력), informod.html(내정보) 의 페이지 디자인 통합 및 수정
---
### <6차 5/17> 강재은-
notice.php, umat.php, vmat.php
회원 정보가 사용자, 봉사자에 따라 구인 및 구직게시판 띄워줌
umat vmat에 게시글 등록하면 notice.php로 돌아가게 했음

다음주 목표
1. 구인구직 메뉴 클릭하면 notice.php로 갈수 있도록 변경해야됨
2. 세션 이용하여 현재 로그인되어있는 아이디 불러와 구인 구직 게시판 만들 수 있게 수정해야됨(다음주 umat.php vmat.php 수정함)


### <6차 5/17> 김찬영- 
Vinfor.php 전체 회원수 출력
user.sql vincnt 테이블 추가
a/blogmain,signup 소스코드 수정

다음목표: db 봉사활동 횟수 연동하여 Vinfor 에 출력,  등 미완성 페이지 작성

### <6차 5/17> 박상우- 
Login.php에서 함수를 제작하여 비밀번호동일여부와 아이디 중복여부를 판단하는 함수제작
아이디 중복여부를 판단하는 php 제작(logcheck.php)
Logcheck.php에서 세션을 적용하여 로그인 제작
Logtest.php에서 로그인된 사용자의 이름과 아이디 출력(test)
Logout.php에서 세션종료와 함께 로그아웃 실행

다음목표: 페이지 이동 최적화

### <7차 5/24> 임무변경 박상우,김찬영(작업량에 따른 2인팀 생성) ->매칭시스템 작성 // 강재은->메인화면 구성요소 작성
박상우,김찬영-매칭시스템 코딩을 위해 데이터 베이스를 기존과 달리 외래키를 이용하여 제작
사용자의정보-user테이블/지원정보-volapp테이블/봉사내용-volcontents테이블
내가 생성한 봉사활동/내가 신청한 봉사활동 출력(mycreatevol.php,myappvol.php)

박상우-테이블 출력을 위한 기본 css작성,상단 공백 제거를 위한 css작성

강재은-고객센터 페이지 제작



