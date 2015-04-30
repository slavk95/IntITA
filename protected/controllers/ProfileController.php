<?php
class ProfileController extends Controller
{
    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page'=>array(
                'class'=>'CViewAction',
            ),
        );
    }
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex($idTeacher=1)
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $teacher = Teacher::model()->findByPk($idTeacher);
        $sections = explode(';', $teacher->sections);

        $permission = new Permissions();
        if ($permission->checkPermission(Yii::app()->user->getId(), 2, array('edit'))) {
            $editMode = 1;
        } else {
            $editMode = 0;
        }
        $criteria= new CDbCriteria;
        $criteria->order = 'date DESC';

        $dataProvider = new CActiveDataProvider('Response', array(
            'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>5,
            ),
        ));

        $this->render('index', array (
            'model' => $teacher,
            'sections' => $sections,
            'editMode' => $editMode,
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionSave(){
        $this->render('save');
    }

    public function actionAboutdetail()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('aboutdetail');
    }
    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }
    /**
     * Displays the contact page
     */
    public function actionContact()
    {
        $model=new ContactForm;
        if(isset($_POST['ContactForm']))
        {
            $model->attributes=$_POST['ContactForm'];
            if($model->validate())
            {
                $name='=?UTF-8?B?'.base64_encode($model->name).'?=';
                $subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
                $headers="From: $name <{$model->email}>\r\n".
                    "Reply-To: {$model->email}\r\n".
                    "MIME-Version: 1.0\r\n".
                    "Content-Type: text/plain; charset=UTF-8";
                mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
                Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact',array('model'=>$model));
    }
    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $model=new LoginForm;
        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        // collect user input data
        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login',array('model'=>$model));
    }
    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionResponse($id=1){
        $response = new Response();
        $teacher = Teacher::model()->findByPk($id);


        if($_POST['sendResponse']) {
            if(!empty($_POST['response'])) {
                $response->who = Yii::app()->user->id;
                $response->about = $teacher->teacher_id;
                $response->date = date("Y-m-d H:i:s");
                $response->text = $_POST['response'];
                $response->knowledge =$_POST['material'];
                $response->behavior =$_POST['behavior'];
                $response->motivation =$_POST['motiv'];
                $response->rate = round(($_POST['material']+$_POST['behavior']+$_POST['motiv'])/3);
                $response->who_ip =$_SERVER["REMOTE_ADDR"];


                $response->save();

                $teacher->updateByPk($id, array('rate_knowledge' =>$teacher->getAverageRateKnwl($id)));
                $teacher->updateByPk($id, array('rate_efficiency' => $teacher->getAverageRateBeh($id)));
                $teacher->updateByPk($id, array('rate_relations' => $teacher->getAverageRateMot($id)));

                Yii::app()->user->setFlash('messageResponse','Ваш відгук відправлено. Зачекайте модерації.');
            }
            header('Location: '.$_SERVER['HTTP_REFERER']);
        }
    }
}