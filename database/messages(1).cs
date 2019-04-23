using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Constructeurs
{
    #region Messages
    public class Messages
    {
        #region Member Variables
        protected int _id_message;
        protected int _id_user_send;
        protected int _id_user_receive;
        protected string _message;
        protected unknown _date_ajout_message;
        #endregion
        #region Constructors
        public Messages() { }
        public Messages(int id_user_send, int id_user_receive, string message, unknown date_ajout_message)
        {
            this._id_user_send=id_user_send;
            this._id_user_receive=id_user_receive;
            this._message=message;
            this._date_ajout_message=date_ajout_message;
        }
        #endregion
        #region Public Properties
        public virtual int Id_message
        {
            get {return _id_message;}
            set {_id_message=value;}
        }
        public virtual int Id_user_send
        {
            get {return _id_user_send;}
            set {_id_user_send=value;}
        }
        public virtual int Id_user_receive
        {
            get {return _id_user_receive;}
            set {_id_user_receive=value;}
        }
        public virtual string Message
        {
            get {return _message;}
            set {_message=value;}
        }
        public virtual unknown Date_ajout_message
        {
            get {return _date_ajout_message;}
            set {_date_ajout_message=value;}
        }
        #endregion
    }
    #endregion
}