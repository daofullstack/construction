using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Constructeurs
{
    #region Notes
    public class Notes
    {
        #region Member Variables
        protected int _id_note;
        protected int _note;
        protected int _id_demandeur;
        #endregion
        #region Constructors
        public Notes() { }
        public Notes(int note, int id_demandeur)
        {
            this._note=note;
            this._id_demandeur=id_demandeur;
        }
        #endregion
        #region Public Properties
        public virtual int Id_note
        {
            get {return _id_note;}
            set {_id_note=value;}
        }
        public virtual int Note
        {
            get {return _note;}
            set {_note=value;}
        }
        public virtual int Id_demandeur
        {
            get {return _id_demandeur;}
            set {_id_demandeur=value;}
        }
        #endregion
    }
    #endregion
}