using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Supreme_ip
{
    #region File_management
    public class File_management
    {
        #region Member Variables
        protected int _fileid;
        protected string _file_name;
        protected string _file_url;
        protected string _File_uploaded;
        #endregion
        #region Constructors
        public File_management() { }
        public File_management(string file_name, string file_url, string File_uploaded)
        {
            this._file_name=file_name;
            this._file_url=file_url;
            this._File_uploaded=File_uploaded;
        }
        #endregion
        #region Public Properties
        public virtual int Fileid
        {
            get {return _fileid;}
            set {_fileid=value;}
        }
        public virtual string File_name
        {
            get {return _file_name;}
            set {_file_name=value;}
        }
        public virtual string File_url
        {
            get {return _file_url;}
            set {_file_url=value;}
        }
        public virtual string File_uploaded
        {
            get {return _File_uploaded;}
            set {_File_uploaded=value;}
        }
        #endregion
    }
    #endregion
}